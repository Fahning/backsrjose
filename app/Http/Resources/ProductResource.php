<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        $data = [
//            'id' => $this->id,
//            'quantity' => $this->quantity,
//            'price' => $this->price,
//            'product_id' => $this->product_id,
//            'product'   => new ProductResource($this->product),
//            'order_id'     => $this->order_id,
//            'order'     => new OrderResource($this->order),
//            'created_at' => $this->created_at
//        ];
        return parent::toArray($request);
    }
}
