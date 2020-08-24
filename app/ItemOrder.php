<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\Order;

class ItemOrder extends Model
{
    protected $table = "item_order";

    protected $fillable = [
        'order_id', 'item_id', 'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
