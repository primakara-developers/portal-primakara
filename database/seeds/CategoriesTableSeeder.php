<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = 
        [
            'category_name' => $title = 'Informasi',
            'category_slug' => str_slug($title)
        ];
            
        Category::create($category);
    }
}
