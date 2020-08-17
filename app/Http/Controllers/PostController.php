<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Genre;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('category_id')->latest()->paginate(5);

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $genres = Genre::all();

        return view('posts.create',compact('categories','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateDates = $request->validate([
            'title' => 'required',
            'autor' => 'required',
            'description' => 'required',
            'img' => 'required',
            'genre' => 'required',
            'category_id' => 'required'
        ]);

        $img = $request->img;
        $imgName = $img->getClientOriginalName();

       if( $img->storeAs('posts',$imgName) ){

            $validateDates['img'] = $imgName;

            Post::create($validateDates);

            return redirect()->route('posts.index')->with('status','Post is created');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $category = $post->category;
        $genres = $category->genres;

        $categories = Category::all();

        return view('posts.edit',compact('post','genres','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validateDates = $request->validate([
            'title' => 'required',
            'autor' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'category_id' => 'required'
        ]);

        if($request->has('img')){

            unlink( public_path().'/images/posts/'.$post->img );

            $img = $request->img;
            $imgName = $img->getClientOriginalName();
    
           if( $img->storeAs('posts',$imgName) ){
    
                $validateDates['img'] = $imgName;
    
            }
        }
        
        $post->update($validateDates);

        return redirect()->route('posts.index')->with('status','Post is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        unlink(public_path().'/images/posts/'.$post->img);

        $post->delete();

        return redirect()->back()->with('status','Post is deleted');
    }
}
