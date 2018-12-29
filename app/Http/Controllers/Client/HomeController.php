<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
    	// Headline Section
        $headlines = Post::with('categories')
            ->where('is_headline', 1)
            ->orderBy('headline_at', 'desc')
            ->get();

        // Informasi Section
        $category = new Category;

        $SingleCategory = $category->with('posts.user')->find(1);

        $posts = $SingleCategory->posts()->paginate(4);

        return view('client.home')
            ->with('posts', $posts)
            ->with('headlines', $headlines);
    }
}
