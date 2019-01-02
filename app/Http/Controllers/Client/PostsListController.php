<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostsListController extends Controller
{
    public function index($categoryName)
    {
        $category = new Category;

        $SingleCategory = $category->with('posts.user')->where('category_name', $categoryName)->firstOrFail();

        $posts = $SingleCategory->posts()->orderBy('created_at', 'desc')->paginate(6);
        
        // return dd($SingleCategory->posts());

        return view('client.postList')
            ->with('posts', $posts)
            ->with('categoryName', $categoryName);
    }
}
