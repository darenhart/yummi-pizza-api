<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_can_create_complete_order() {

        $data = [
            'user_id' => 10,
            'price' => 123,
            'delivery_price' => 123,
            'currency' => 'USD',
        ];

        $this->post(route('order.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

}