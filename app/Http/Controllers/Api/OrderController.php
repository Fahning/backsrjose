<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderController extends Controller
{
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
