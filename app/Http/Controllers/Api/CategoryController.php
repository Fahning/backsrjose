<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Retornar todos as categorias.
     *
     * @return CategoryResource
     */
    public function index(): CategoryResource
    {
        return new CategoryResource(Category::all());
    }

    /**
     * Mostra uma categoria por id.
     *
     * @param Category $category
     * @return CategoryResource
     */
    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }


    /**
     * Salva nova categoria.
     *
     * @param Request $request
     * @return CategoryResource
     */
    public function store(Request $request): CategoryResource
    {
        $data = $request->all();
        $waiter = new Category();
        $waiter->fill($data);
        $waiter->save();
        return new CategoryResource($waiter);
    }

    /**
     * Atualiza categoria por id passado
     *
     * @param Request $request
     * @param Category $category
     * @return CategoryResource
     */
    public function update(Request $request, Category $category): CategoryResource
    {
        $data = $request->all();
        $category->update($data);
        return new CategoryResource($category);
    }

    /**
     * Deleta categoria por id passado.
     *
     * @param Category $category
     * @return CategoryResource
     * @throws \Exception
     */
    public function destroy(Category $category): CategoryResource
    {
        $category->delete();
        return new CategoryResource($category);
    }
}
