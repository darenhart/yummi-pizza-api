<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;

class ItemTest extends TestCase
{
    public function test_can_create_item() {

        $data = [
            'title' => 'test',
            'description' => 'test',
            'price' => 10,
            'image' => 'test'
        ];

        $this->post(route('item.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}