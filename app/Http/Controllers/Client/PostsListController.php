<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Illuminate\Pagination\Paginator;

class PostsListController extends Controller
{
    public function index($categorySlug, $page = null)
    {
        $category = new Category;
        $checker = $category->where('category_slug', $categorySlug)->firstOrFail();

        $allCategory = $category->all();

        $SingleCategory = $category->with('posts.user')->where('category_slug', $categorySlug)->first();

        if($SingleCategory->posts()->exists()){
            Paginator::currentPageResolver(function () use ($page) {
                return $page;
            });
            $posts = $SingleCategory->posts()->orderBy('created_at', 'desc')->paginate(6);
            $category_name = $SingleCategory->category_name;
            $category_slug = $SingleCategory->category_slug;
        }else{
            $posts = null;
            $category_name = $category->where('category_slug', $categorySlug)->first()->category_name;
            $category_slug = null;
        }

        return view('client.postList')
            ->with('posts', $posts)
            ->with('categorySlug', $category_slug)
            ->with('categoryName', $category_name)
            ->with('allCategory', $allCategory);
    }
}
