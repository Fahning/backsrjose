<?php

namespace App\Http\Resources;

use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderProductResource extends JsonResource
{
    /**
     * Transforma objeto em array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {

        $data = [
            'id' => $this->id,
            'quantity' => $this->quantity,
            'product_id' => $this->product_id,
            'product' => new ProductResource($this->product),
            'order_id' => $this->order_id,
            'order' => new OrderResource($this->order)
        ];

        return parent::toArray($data);
    }
}
