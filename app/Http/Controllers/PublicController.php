<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Genre;
use App\Post;

class PublicController extends Controller
{
    public function index(){

        $menuItems = Category::all();
        $books = Category::where('name','Knjige')->first()->posts()->latest()->take(8)->get();
        $movies = Category::where('name','Film')->first()->posts()->latest()->take(8)->get();
        $games = Category::where('name','Igre')->first()->posts()->latest()->take(8)->get();
        $musics = Category::where('name','Muzika')->first()->posts()->latest()->take(8)->get();

        return view('public.index',compact('menuItems','books','movies','games','musics'));
    }

    public function getPostByCategory(Category $category){

        $menuItems = Category::all();
        $posts = $category->posts()->orderBy('title')->paginate(20);
        $genres = $category->genres()->orderBy('name')->get();
        
        return view('public.categoryPosts',compact('posts','genres','menuItems','category'));
    }

    public function getPostsByGenre(Category $category,Genre $genre){
        
        $menuItems = Category::all();
        $posts = $category->posts()->where('genre',$genre->name)->orderBy('title')->paginate(20);
        $genres = $category->genres()->orderBy('name')->get();
        $genreName = $genre->name;
        
        return view('public.genrePosts',compact('posts','genres','menuItems','genreName','category'));
    }

    public function getPost(Post $post){

        $menuItems = Category::all();

        $genre = $post->genre;
        $category = $post->category;

        $postsSameGenres = $category->posts()->where('genre',$genre)->take(4)->get();

        $similarPosts = collect();

        foreach($postsSameGenres as $p){
            if($p->title !== $post->title){
                $similarPosts->push($p);
            }
        }

        $similarPosts->random(3);

        return view('public.post',compact('post','menuItems','similarPosts','category'));
    }

    public function search(Request $request){

        $posts = Post::where('title','like','%'.$request->search.'%')->get();

        return view('ajax.serachRespponse',compact('posts'));
    }

    public function insertGenreDropdown(Request $request){

        $cat_id = $request->categoryId;

        $category = Category::find($cat_id);

        $genres = $category->genres()->get();

        return view('ajax.genresDropdown',compact('genres'));
    }
}
