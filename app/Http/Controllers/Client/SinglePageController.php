<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class SinglePageController extends Controller
{
    function index($slugPost)
    {
    	return view('client.postDetail');
    }
}
