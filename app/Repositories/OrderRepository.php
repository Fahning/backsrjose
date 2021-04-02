<?php


namespace App\Repositories;


use App\Http\Resources\OrderResource;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderRepository
{
    private $request;
    private $resume;
    private $waiterResume = [];

    public function __construct(Request $request = null){
        if($request != null) {
            $this->request = $request->all();
        }
    }

    /**
     * @param array $request
     * @return Order | Exception
     */
    public function setOrder()
    {
        $order = new Order();
        $dataOrder = [
            'total' => 0,
            'discount' => 0,
            'commission => 0',
            'commands' => 0,
            'client_id' => (int)$this->request['client_id'],
            'waiter_id' => (int)$this->request['waiter']
        ];
        DB::beginTransaction();
        try {
            $order->fill($dataOrder);
            $order->save();
            $total = 0;
            foreach ($this->request['products'] as $product){
                $orderProduct = new OrderProduct();
                $dataProduct = [
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                    'product_id' => $product['id'],
                    'order_id' => $order->id
                ];
                $orderProduct->fill($dataProduct);
                $orderProduct->save();
                $total += $product['quantity'] * $product['price'];
            }
            $order->total = $total;
            $order->save();
            DB::commit();
            return $order;
        } catch (Exception $ex) {
            DB::rollBack();
            return $ex->getMessage();
        }
    }

    public function sellsProducts ($product_id): array
    {
        $venda = OrderProduct::
        select(DB::raw('products.name, products.price, products.stock, order_products.quantity'))
            ->join('orders', 'order_products.product_id', '=', 'orders.id')
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->where('order_products.order_id', $product_id)
            ->get();
        $listProducts = [];
        foreach ($venda as $prod) {
            $addProd = [
                'name' => $prod->name,
                'quantity' => $prod->quantity,
                'price'  => $prod->price,
                'stock' => 0
            ];
            array_push($listProducts, $addProd);
        }

        return $listProducts;
    }

    /**
     *
     * @return array
     */
    public function getSellsResume(): array
    {

        $today = Carbon::today()->day;
        $month = Carbon::today()->month;
        Carbon::setWeekStartsAt(Carbon::SUNDAY);

        $sells      = Order::orderBy('created_at', 'desc')->get();
        $sellsDay   = Order::whereDay('created_at', $today)->get();

        $sellsWeek = DB::table('orders')
           ->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
           ->get();
        $sellsMonth = Order::whereMonth('created_at', $month)->get();
        $newClients = Client::whereMonth('created_at', $month)->get();
        $activeClients = Order::all()->groupBy('client_id')->count();

        $orders      = OrderProduct::all();
        $total       = 0;
        $bestSellers = OrderProduct::
        select(DB::raw('COUNT(*) as vendas, product_id, products.name, SUM(quantity) AS total'))
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->groupBy('product_id')
            ->orderBy('total', 'desc')->take(6)->get();
        $lessSold = OrderProduct::
        select(DB::raw('COUNT(*) as vendas, product_id, products.name, SUM(quantity) AS total'))
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->groupBy('product_id')
            ->orderBy('total', 'asc')->take(6)->get();
        foreach ($orders as $t){
            $total += $t->quantity;
        }
        function rand_color(): string
        {
            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }
        //Charts
        $series = [];
        $categoriasShow = [];
        $categories = Category::all();
        foreach ($categories as $category){
            array_push($categoriasShow, $category->name);
            $item = [
                'name' => $category->name,
                'type' => "bar",
                'data' => [],
                'color' => rand_color() //"#".$category->id."46bfa",
            ];
            for ($i = 1; $i <= 12; $i++) {
                $data = OrderProduct::
                select(DB::raw('categories.name,  SUM(order_products.quantity) AS total '))
                    ->join('products', 'order_products.product_id', '=', 'products.id')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->whereMonth('order_products.created_at', $month - 4 + $i)
                    ->groupBy('products.category_id')->get();
                if($data->count() > 0){
                    foreach ($data as $d) {
                        if($category->name === $d->name){
                            array_push($item['data'], $d->total);
                        }
                    }
                }else {
                    array_push($item['data'], 0);
                }
            }
        array_push($series, $item);
        }
        // Chart PIE
        $pieChart = [];
        foreach ($categories as $category){
            $data = OrderProduct::
            select(DB::raw('categories.name,  SUM(order_products.quantity) AS total '))
                ->join('products', 'order_products.product_id', '=', 'products.id')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->where('products.category_id', $category->id)
                ->groupBy('products.category_id')->get();
            foreach ($data as $d) {
                $item = [
                    'value' => $d->total,
                    'name' => $d->name,
                    'itemStyle' => [
                        'color' => rand_color()
                    ]
                ];
                array_push($pieChart, $item);
            }
        }
        $this->resume = [
            'today'     => [
                'total_qnt'     => $sellsDay->count(),
                'total_price'   => $sellsDay->sum('total')
            ],
            'week'      => [
                'total_qnt'     => $sellsWeek->count(),
                'total_price'   => $sellsWeek->sum('total')
            ],
            'month'     => [
                'total_qnt'     => $sellsMonth->count(),
                'total_price'   => $sellsMonth->sum('total')
            ],
            'categoriasShow'  => $categoriasShow,
            'pieChart'         => $pieChart,
            'series'            => $series,
            'newClients'        => $newClients->count(),
            'activeClients'     => $activeClients,
            'vendas'            => $sells,
            'total_itens'       => $total,
            'bestSellers'       => $bestSellers,
            'lessSold'          => $lessSold
        ];
        return $this->resume;
    }

    /**
     *
     * @return array
     */

    /**
     * @param $waiter_id
     * @return array
     */
    public function getWaiterMonth($waiter_id): array
    {
        $waiterMonth = Order::where('waiter_id', $waiter_id)->get();
        if(count($waiterMonth) > 0){
            $order = new OrderResource($waiterMonth->first());
            $this->waiterResume = [
                'name' => $order->waiter->name,
                'qnt'  => $waiterMonth->count()
            ];
            return $this->waiterResume;
        }else{
            return $this->waiterResume;
        }

    }
}
