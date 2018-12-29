<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = 
        [
            [
                'post_cover' => 'christmas5c273ce842435.jpg',
                'post_title' => $title = str_random(10),
                'post_slug' => str_slug($title),
                'post_content' => str_random(100),
                'is_headline' => 0,
                'headline_at' => NULL,
                'category_id' => 1,
                'user_id' => 1
            ],
            [
                'post_cover' => 'christmas5c273ce842435.jpg',
                'post_title' => $title = str_random(10),
                'post_slug' => str_slug($title),
                'post_content' => str_random(100),
                'is_headline' => 0,
                'headline_at' => NULL,
                'category_id' => 1,
                'user_id' => 1
            ],
            [
                'post_cover' => 'christmas5c273ce842435.jpg',
                'post_title' => $title = str_random(10),
                'post_slug' => str_slug($title),
                'post_content' => str_random(100),
                'is_headline' => 0,
                'headline_at' => NULL,
                'category_id' => 1,
                'user_id' => 1
            ],
            [
                'post_cover' => 'christmas5c273ce842435.jpg',
                'post_title' => $title = str_random(10),
                'post_slug' => str_slug($title),
                'post_content' => str_random(100),
                'is_headline' => 0,
                'headline_at' => NULL,
                'category_id' => 1,
                'user_id' => 1
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
