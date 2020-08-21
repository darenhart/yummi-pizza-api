<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();

        Item::create([
            'title' => 'Pizza 1',
            'description' => 'Test pizza desc',
            'price' => 720,
            'image' => 'https://uploads.metropoles.com/wp-content/uploads/2020/07/08151632/fatias-de-pizza-em-marmore-sobre-a-tabua-de-cortar_23-2147926088.jpg',
        ]);
        Item::create([
            'title' => 'Pizza 2',
            'description' => 'Test pizza 2',
            'price' => 1910,
            'image' => 'https://img.estadao.com.br/thumbs/640/resources/jpg/8/9/1569458498298.jpg',
        ]);
    }
}
