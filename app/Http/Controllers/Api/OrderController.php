<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Providers\OrderServiceProvider;
use App\Repositories\OrderRepository;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

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
        $orders = new OrderRepository($request);
        return response()->json($orders->setOrder(), 200);
    }

    /**
     * Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.
     *
     * @return JsonResponse
     */
    public function sellsResume(): JsonResponse
    {
        $orders = new OrderRepository();
        return response()->json($orders->getSellsResume(), 200);
    }
    public function sellsProducts($product_id): JsonResponse
    {
        $orders = new OrderRepository();
        return response()->json($orders->sellsProducts($product_id), 200);
    }


    /**
     * Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.
     *
     * @return JsonResponse
     */
    public function waiterMonth($waiter_id): JsonResponse
    {
        $resume = new OrderRepository();
        return response()->json($resume->getWaiterMonth($waiter_id), 200);
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
