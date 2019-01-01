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
    	return view('client.postList');
    }
}
