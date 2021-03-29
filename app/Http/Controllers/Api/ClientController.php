<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;

/**
 * @group Clients
 *
 * APIs para gerenciar Clients
 */
class ClientController extends Controller
{
    /**
     * Retorna todos os clientes cadastrados.
     *
     * @return ClientResource
     */
    public function index(): ClientResource
    {
        return new ClientResource(Client::all());
    }

    /**
     * Cadastra um novo cliente.
     *
     * @param Request $request
     * @return ClientResource
     */
    public function store(Request $request): ClientResource
    {
        $data = $request->all();
        $client = new Client();
        $client->fill($data);
        $client->save();
        return new ClientResource($client);
    }


    /**
     * Retorna dados de um cliente específico por id.
     *
     * @param  Client  $client
     * @return ClientResource
     */
    public function show(Client $client): ClientResource
    {
        return new ClientResource($client);
    }

    /**
     * Retorna dados de um cliente específico por telefone.
     *
     * @param $phone
     * @return ClientResource
     */
    public function findPhone($phone): ClientResource
    {
        $phone = '%'.$phone.'%';
        $client = Client::where('phone', 'like', $phone)->get();
        if(count($client) <= 0){
            $client = ['Falha' => 'Cliente não cadastrado'];
        }
        return new ClientResource($client);
    }

    /**
     * Atualiza um Cliente informado por ID
     *
     * @param Request $request
     * @param Client $client
     * @return ClientResource
     */
    public function update(Request $request, Client $client): ClientResource
    {
        $data = $request->all();
        $client->update($data);
        return new ClientResource($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return ClientResource
     * @throws Exception
     */
    public function destroy(Client $client): ClientResource
    {
        $client->delete();
        return new ClientResource($client);
    }
}
