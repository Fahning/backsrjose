<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'quantity',
        'price',
        'product_id',
        'order_id',
        'created_at'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class,'id', 'product_id');
    }

    public function order(): HasOne
    {
        return $this->hasOne(Order::class,'id', 'order_id');
    }
}
