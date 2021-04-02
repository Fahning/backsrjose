<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * @group Products
 *
 * APIs para gerenciar Products
 */

class ProductController extends Controller
{
    /**
     * Retorna todos os produtos cadastrados.
     *
     * @return ProductResource
     */
    public function index(): ProductResource
    {
        return new ProductResource(Product::all());
    }

    /**
     * Cadastra um novo produto.
     *
     * @param  Request  $request
     * @return ProductResource
     */
    public function store(Request $request): ProductResource
    {
        $data = $request->all();
        $product = new Product();
        $product->fill($data);
        $product->save();
        return new ProductResource($product);
    }

    /**
     * Mostra um produto por id.
     *
     * @param Product $product
     * @return ProductResource
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource($product);
    }

    /**
     * Mostra um produto por id.
     *
     * @param $id
     * @return ProductResource
     */
    public function byCategory($id): ProductResource
    {
        $products = Product::where('category_id', $id)->get();
        return new ProductResource($products);
    }

    /**
     * Atualiza produto por id passado.
     *
     * @param Request $request
     * @param Product $product
     * @return ProductResource
     */
    public function update(Request $request, Product $product): ProductResource
    {
        $data = $request->all();
        $product->update($data);
        return new ProductResource($product);
    }

    /**
     * Deleta produto por id passado.
     *
     * @param Product $product
     * @return ProductResource
     * @throws \Exception
     */
    public function destroy(Product $product): ProductResource
    {
        $product->delete();
        return new ProductResource($product);
    }
}
