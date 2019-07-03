<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use Auth;
class PostController extends Controller
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
        if (Auth::user()->is_staff == 1) {
            $posts = Post::paginate(10);
        } else {
            $posts = Post::where('user_id', Auth::user()->id)->paginate(10);
        }

        // dd(Post::find(1));

        return view('dashboard.posts.index')
        ->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.add')
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
            'post_title'=>'required|string',
            'post_cover'=>'required|mimes:jpg,png,jpeg|max:2048',
            'post_slug'=>'required|string|unique:posts,post_slug',
            'post_content'=>'required|string',
            'category_name'=>'required|string',
        ]);

        //insert the category
        $insertCategory = Category::firstOrCreate([
            'category_name' => $request->category_name,
            'category_slug' => str_slug($request->category_name)
        ]);

        if($insertCategory){
            $category_id = $insertCategory->id;
            if($request->hasFile('post_cover')){
                $imageFile = $request->file('post_cover');
                $post_cover = str_slug($request->post_title).uniqid().'.'.$imageFile->getClientOriginalExtension();
                Storage::disk('local')->putFileAs('public/media/', $imageFile, $post_cover);
            }

            $fields = [
                'post_title' => $request->post_title,
                'post_cover' => $post_cover,
                'post_slug'=> $request->post_slug,
                'post_content'=>$request->post_content,
                'category_id'=>$category_id,
                'user_id'=>Auth::user()->id
            ];

            $insert = Post::create($fields);
            if($insert){
                return redirect()->to(route('admin.post.index'))
                ->with('msg', 'Post created successfully!');
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
        $post = Post::find($id);
        $categories = Category::all();
        $selectedCategory = Category::find($post->category_id)->category_name;
        return view('dashboard.posts.edit')->with(['post'=>$post, 'categories'=>$categories, 'selectedCategory'=>$selectedCategory]);
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
        $request->validate([
            'post_title'=>'required|string',
            // 'post_cover'=>'required|mimes:jpg,png,jpeg|max:2048',
            // 'post_slug'=>'required|string|unique:posts,post_slug',
            'post_content'=>'required|string',
            'category_name'=>'required|string',
        ]);

        //insert the category
        $insertCategory = Category::firstOrCreate([
            'category_name' => $request->category_name,
            'category_slug' => str_slug($request->category_name)
        ]);

        if($insertCategory){
            $category_id = $insertCategory->id;

            $post_cover = null;
            if($request->hasFile('post_cover')){
                $imageFile = $request->file('post_cover');
                $post_cover = str_slug($request->post_title).uniqid().'.'.$imageFile->getClientOriginalExtension();
                Storage::disk('local')->putFileAs('public/media/', $imageFile, $post_cover);
            }

            $fields = [
                'post_title' => $request->post_title,
                'post_slug'=> $request->post_slug,
                'post_content'=>$request->post_content,
                'category_id'=>$category_id,
                'user_id'=>Auth::user()->id
            ];

            if ($post_cover !== null) $fields['post_cover'] = $post_cover;

            $post = Post::find($id);

            $insert = $post->update($fields);
            if($insert){
                return redirect()->to(route('admin.post.edit', ['id'=>$id]))
                ->with('msg', 'Post created successfully!');
            }
        }

        return view('dashboard.posts.edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $deleteCover = Storage::disk('local')->delete('public/media/'.$post->post_cover);
        $execute = $post->delete();
        if($execute) {
            return redirect()->back()->with([
                'msg'=>'Post removed succesfully!'
            ]);
        }else {
            return redirect()->back()->with([
                'msg'=>'Post is Not found!'
            ]);
        }
    }

    /**
     * filter Post by category id
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function filteredPosts($id)
    {
        $posts = Post::where('category_id',$id)->get();

        return view('dashboard.posts.index')
        ->with('posts',$posts);
    }
}
