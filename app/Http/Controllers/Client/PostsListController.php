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

        $checker = $category->where('category_slug', $categoryName)->firstOrFail();

        $allCategory = $category->all();

        $SingleCategory = $category->with('posts.user')->where('category_slug', $categoryName)->first();

        if($SingleCategory->posts()->exists()){
            $posts = $SingleCategory->posts()->orderBy('created_at', 'desc')->paginate(6);
            $category_name = $SingleCategory->category_name;
        }else{
            $posts = null;
            $category_name = $category->where('category_slug', $categoryName)->first()->category_name;
        }

        return view('client.postList')
            ->with('posts', $posts)
            ->with('categoryName', $category_name)
            ->with('allCategory', $allCategory);
    }
}
