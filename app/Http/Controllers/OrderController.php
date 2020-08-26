<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use App\User;
use App\ItemOrder;

class OrderController extends Controller
{
    public function index()
    {
        return Order::with('items')->get();
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
        $order = Order::findOrFail($id);
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


    public function completeOrder(Request $request)
    {
        $user = User::create($request->get('user'));
        $order = Order::create(array_merge(
            array('user_id' => $user->id),
            $request->get('order')
        ));
        foreach($request->get('items') as $item) {
            ItemOrder::create(array(
                'item_id' => $item['id'],
                'order_id' => $order->id,
                'quantity' => $item['quantity'],
            ));
        }
        return 201;
    }
}
