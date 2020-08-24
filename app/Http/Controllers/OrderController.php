<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use App\ItemOrder;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }
    
    public function show($id)
    {
        return Order::with('items')->find($id);
    }

    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $order = Article::findOrFail($id);
        $order->update($request->all());

        return $order;
    }

    public function delete(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return 204;
    }

    public function addItem(Request $request, Order $order, Item $item)
    {
        ItemOrder::create(array(
            'item_id' => $item->id,
            'order_id' => $order->id,
            'quantity' => $request->get('quantity'),
        ));
        return 201;
    }
}
