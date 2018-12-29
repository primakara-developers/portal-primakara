<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
    	// Headline Section

        // Informasi Section
        $category = new Category;

        $SingleCategory = $category->with('posts.user')->find(1);

        $posts = $SingleCategory->posts()->paginate(4);

    	return view('client.home')->with('posts', $posts);
    }
}
