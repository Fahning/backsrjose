<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'total',
        'discount',
        'commission',
        'commands',
        'client_id',
        'waiter_id',
        'created_at'
    ];

    public function orderProduct(): BelongsTo
    {
        return $this->belongsTo(OrderProduct::class, 'porder_id');
    }

    public function client(): HasOne
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function waiter(): HasOne
    {
        return $this->hasOne(Waiter::class, 'id', 'waiter_id');
    }

}
