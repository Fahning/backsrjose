<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;

/**
 * @group Orders
 *
 * APIs para gerenciar Orders
 */
class OrderController extends Controller
{
    /**
     * Registra pedido realizado pelo client
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function makeOrder(Request $request): JsonResponse
    {
//        return response()->json($products[''], 200);
        $order = new Order();
        $dataOrder = [
            'total' => 0,
            'discount' => 0,
            'commission => 0',
            'commands' => 0,
            'client_id' => $request->client_id,
            'waiter_id' => $request->waiter_id
        ];
        DB::beginTransaction();
        try {
            $order->fill($dataOrder);
            $order->save();
            $total = 0;
            foreach ($request->products as $product){
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
            return response()->json($order, 200);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(['error' => $ex->getMessage()],404);
        }

    }

    /**
     * Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.
     *
     * @return JsonResponse
     */

    public function sellsResume(): JsonResponse
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

        $resume = [
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

        return response()->json($resume, 201);
    }


    /**
     * Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.
     *
     * @return JsonResponse
     */

    public function waiterMonth($waiter_id): JsonResponse
    {
        $waiterMonth = Order::where('waiter_id', $waiter_id)->get();
        $order = new OrderResource($waiterMonth->first());
        $resume = [
            'name' => $order->waiter->name,
            'qnt'  => $waiterMonth->count()
        ];
        return response()->json($resume, 201);
    }


    /**
     * Retorna todas as comandas registradas.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return OrderResource::collection(Order::all());
    }


    /**
     * Cadastra nova comanda.
     *
     * @param Request $request
     * @return OrderResource
     */
    public function store(Request $request): OrderResource
    {
        $data = $request->all();
        $order = new Order();
        $order->fill($data);
        $order->save();
        return new OrderResource($order);
    }

    /**
     * Retorna uma comanda por id passado
     *
     * @param Order $order
     * @return OrderResource
     */
    public function show(Order $order): OrderResource
    {
        return new OrderResource($order);
    }


    /**
     * Atualiza comanda por id passado.
     *
     * @param Request $request
     * @param Order $order
     * @return OrderResource
     */
    public function update(Request $request, Order $order): OrderResource
    {
        $data = $request->all();
        $order->update($data);
        return new OrderResource($order);
    }

    /**
     * Delete comanda por id passado.
     *
     * @param Order $order
     * @return OrderResource
     * @throws \Exception
     */
    public function destroy(Order $order): OrderResource
    {
        $order->delete();
        return new OrderResource($order);
    }
}
