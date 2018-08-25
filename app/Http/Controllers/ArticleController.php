<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Article;
use App\Category;
use Auth;
class ArticleController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_staff == 1){
            $articles = Article::where('user_id',Auth::user()->id)->get();
        }else{
            $articles = Article::all();
        }
        return view('dashboard.articles.index')
        ->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();  
        return view('dashboard.articles.add')
        ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'article_title'=>'required|string',
            'article_cover'=>'required|mimes:jpg,png,jpeg|max:2048',
            'article_slug'=>'required|string|unique:articles,article_slug',
            'article_content'=>'required|string',
            'category_name'=>'required|string',
        ]);

        //insert the category
        $insertCategory = Category::firstOrCreate([
            'category_name' => $request->category_name,
            'category_slug' => str_slug($request->category_name)
        ]);

        if($insertCategory){
            $category_id = $insertCategory->id;
            if($request->hasFile('article_cover')){
                $imageFile = $request->file('article_cover');
                $article_cover = str_slug($request->article_title).uniqid().'.'.$imageFile->getClientOriginalExtension();
                Storage::disk('local')->putFileAs('public/media/', $imageFile, $article_cover);
            }
    
            $fields = [
                'article_title' => $request->article_title,
                'article_cover' => $article_cover,
                'article_slug'=> $request->article_slug,
                'article_content'=>$request->article_content,
                'category_id'=>$category_id,
                'user_id'=>Auth::user()->id
            ];
            
            $insert = Article::create($fields);
            if($insert){
                return redirect()->to(route('admin.article.index'))
                ->with('msg', 'Article created successfully!');
            }
        }


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * filter article by category id
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function filteredArticles($id)
    {
        $articles = Article::where('category_id',$id)->get();

        return view('dashboard.articles.index')
        ->with('articles',$articles);
    }
}
