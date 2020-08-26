<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'price', 'delivery_price', 'currency'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_order', 'order_id', 'item_id')->withPivot('quantity');
    }
}
