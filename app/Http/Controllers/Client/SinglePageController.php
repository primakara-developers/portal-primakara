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
        $category = new Category;

        $allCategory = $category->all();

        $post = Post::with('categories', 'user')->where('post_slug', $slugPost)->first();

        return view('client.postDetail')
            ->with('allCategory', $allCategory)
            ->with('post', $post);
    }
}
