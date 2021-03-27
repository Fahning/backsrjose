<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'total' => $this->total,
            'discount' => $this->discount,
            'commission' => $this->commission,
            'commands' => $this->commands,
            'client_id' => $this->client_id,
            'client' => new ClientResource($this->client),
            'waiter_id' => $this->waiter_id,
            'waiter' => new WaiterResource($this->waiter)
        ];
        return parent::toArray($data);
    }
}
