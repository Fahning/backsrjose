<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderProductResource;
use App\Models\OrderProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderProductController extends Controller
{
    /**
     * Retorna todas as comandas e produtos.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return OrderProductResource::collection(OrderProduct::all());
    }


    /**
     * Cadastra nova comanda e produto.
     *
     * @param Request $request
     * @return OrderProductResource
     */
    public function store(Request $request): OrderProductResource
    {
        $data = $request->all();
        $orderProduct = new OrderProduct();
        $orderProduct->fill($data);
        $orderProduct->save();
        return new OrderProductResource($orderProduct);
    }

    /**
     * Retorna comanda produto por id passado
     *
     * @param OrderProduct $orderProduct
     * @return OrderProductResource
     */
    public function show(OrderProduct $orderProduct): OrderProductResource
    {
        return new OrderProductResource($orderProduct);
    }


    /**
     * Atualiza comanda produto por id passado.
     *
     * @param Request $request
     * @param OrderProduct $orderProduct
     * @return OrderProductResource
     */
    public function update(Request $request, OrderProduct $orderProduct): OrderProductResource
    {
        $data = $request->all();
        $orderProduct->update($data);
        return new OrderProductResource($orderProduct);
    }

    /**
     * Deleta comanda produto por id passado.
     *
     * @param OrderProduct $orderProduct
     * @return OrderProductResource
     * @throws Exception
     */
    public function destroy(OrderProduct $orderProduct): OrderProductResource
    {
        $orderProduct->delete();
        return new OrderProductResource($orderProduct);
    }
}
