<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class SinglePageController extends Controller
{
    function index($slugPost)
    {
    	$checker = Post::where('post_slug', $slugPost)->firstOrFail(); 

        $category = new Category;

        $allCategory = $category->all();

        $post = Post::with('categories', 'user')->where('post_slug', $slugPost)->first();
        $randomPosts = Post::inRandomOrder()->paginate(3);

        $links = [
            'Home' => '/', 
            $post->categories->category_name => route('home.postList', ['categorySlug' => $post->categories->category_slug]),
            $post->post_title => route('home.postDetail', ['slugPost' => $post->post_slug])
        ];

        return view('client.postDetail')
            ->with('allCategory', $allCategory)
            ->with('post', $post)
            ->with('links', $links)
            ->with('randomPosts', $randomPosts);
    }
}