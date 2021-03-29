<?php


namespace App\Repositories;


use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderRepository
{
    private $request;
    private $resume;
    private $waiterResume;

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

    /**
     *
     * @return array
     */
    public function getSellsResume(): array
    {

        $today = Carbon::today()->day;
        $month = Carbon::today()->month;

        $sells      = Order::orderBy('created_at', 'desc')->get();
        $sellsDay   = Order::whereDay('created_at', $today)->get();
        $sellsMonth = Order::whereMonth('created_at', $month)->get();

        $orders      = OrderProduct::all();
        $total       = 0;
        $bestSellers = OrderProduct::
        select(DB::raw('count(*) as Qnt, product_id, products.name'))
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->groupBy('product_id')
            ->orderBy('Qnt', 'desc')->first();
        $lessSold = OrderProduct::
        select(DB::raw('count(*) as Qnt, product_id, products.name'))
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->groupBy('product_id')
            ->orderBy('Qnt', 'asc')->first();
        foreach ($orders as $t){
            $total += $t->quantity;
        }

        $this->resume = [
            'today' => [
                'total_qnt' => $sellsDay->count(),
                'total_price' => $sellsDay->sum('total')
            ],
            'month' => [
                'total_qnt' => $sellsMonth->count(),
                'total_price' => $sellsMonth->sum('total')
            ],
            'vendas'      => $sells,
            'total_itens' => $total,
            'bestSellers' => $bestSellers,
            'lessSold'   => $lessSold
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
        $order = new OrderResource($waiterMonth->first());
        $this->waiterResume = [
            'name' => $order->waiter->name,
            'qnt'  => $waiterMonth->count()
        ];
        return $this->waiterResume;
    }
}
