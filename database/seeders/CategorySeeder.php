<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name'=>'Mobiles, Computers'
            ],
            [
                'name'=>'Footwear'
            ],
            [
                'name'=>'Electronics'
            ],
            [
                'name'=>'Food'
            ],
            [
                'name'=>"Men's Fashion"
            ],
            [
                'name'=>"Women's Fashion"
            ],
            [
                'name'=>"Home, Kitchen, Pets"
            ],
            [
                'name'=>"Beauty, Health, Grocery"
            ],
            [
                'name'=>"Sports, Fitness, Bags, Luggage"
            ],
            [
                'name'=>"Movies, Music & Video Games"
            ],
            [
                'name'=>"Books"
            ],
            
        ];
        Category::insert($category);

    }
}
