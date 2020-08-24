<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'image'
    ];

    public function orders()
    {
        return $this->belongsToMany(Item::class, 'item_order', 'item_id', 'order_id');
    }
}
