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
        Item::create([
            'title' => 'Thai Peanut Naan',
            'description' => 'With a ginger-peanut sauce, fresh veggies, a sprinkle of cilantro.',
            'price' => 720,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Thai-Peanut-Naan-Pizzas_EXPS_SDDJ18_207066_B08_08_8b-1-696x696.jpg',
        ]);
        Item::create([
            'title' => 'Creole Shrimp',
            'description' => 'Topped with tomato sauce, mozzarella, thin slices of prosciutto cotto, and mushrooms.',
            'price' => 1910,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Creole-Shrimp-Pizza_EXPS_THN17_139637_B06_14_1b-3-696x696.jpg',
        ]);
        Item::create([
            'title' => 'Deep-Dish Sausage',
            'description' => 'Hot from the oven, is covered with cheese and had fragrant herbs in the crust.',
            'price' => 800,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Deep-Dish-Sausage-Pizza_EXPS_TOHFRBZ19_9861_E04_10_2b-1-696x696.jpg',
        ]);
        Item::create([
            'title' => 'Lehmejun',
            'description' => 'Topped with tomato sauce, mozzarella, thin slices of prosciutto cotto, and mushrooms.',
            'price' => 1200,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Lehmejun-Armenian-Pizza-_EXPS_THN17_202708_B06_20_6b-3-696x696.jpg',
        ]);
        Item::create([
            'title' => 'Mama Rachel\'s Pizza',
            'description' => 'Salami, ham, prosciutto, eggs, and Italian cheeses such as mozzarella.',
            'price' => 2500,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/exps75526_HCK153422B09_03_3b-696x696.jpg',
        ]);
        Item::create([
            'title' => 'Taco Pizza Squares',
            'description' => 'Topped with dill, vegetables, or pieces of bacon.',
            'price' => 1500,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Taco-Pizza-Squares_EXPS_BFBZ19_17840_E01_18_2b-2-696x696.jpg',
        ]);
        Item::create([
            'title' => 'Italian-Style',
            'description' => 'Hot from the oven, is covered with cheese and had fragrant herbs in the crust.',
            'price' => 1300,
            'image' => 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Italian-Style-Pizzas_EXPS_SDDJ19_41774_E07_13_7b-1-696x696.jpg',
        ]);
    }
}
