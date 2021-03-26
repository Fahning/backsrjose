<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WaiterResource;
use App\Models\Waiter;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    /**
     * Retornar todos os funcionários.
     *
     * @return WaiterResource
     */
    public function index(): WaiterResource
    {
        return new WaiterResource(Waiter::all());
    }

    /**
     * Mostra um funcionário por id.
     *
     * @param Waiter $waiter
     * @return WaiterResource
     */
    public function show(Waiter $waiter): WaiterResource
    {
        return new WaiterResource($waiter);
    }


    /**
     * Salva novo funcionário.
     *
     * @param Request $request
     * @return WaiterResource
     */
    public function store(Request $request): WaiterResource
    {
        $data = $request->all();
        $waiter = new Waiter();
        $waiter->fill($data);
        $waiter->save();
        return new WaiterResource($waiter);
    }

    /**
     * Atualiza funcionário por id passado
     *
     * @param Request $request
     * @param Waiter $waiter
     * @return WaiterResource
     */
    public function update(Request $request, Waiter $waiter): WaiterResource
    {
        $data = $request->all();
        $waiter->update($data);
        return new WaiterResource($waiter);
    }

    /**
     * Deleta funcionário por id passado.
     *
     * @param Waiter $waiter
     * @return WaiterResource
     * @throws \Exception
     */
    public function destroy(Waiter $waiter): WaiterResource
    {
        $waiter->delete();
        return new WaiterResource($waiter);
    }
}
