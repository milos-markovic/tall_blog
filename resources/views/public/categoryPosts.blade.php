@extends('layouts.front')


@section('content')

    <div class="sm:flex  ">
    
        <nav class="menu mx-10 sm:w-1/5 sm:mr-8">
        
           <div class="shadow-lg">
                @foreach( $genres as $genre )

                    <a href="{{ route('public.genrePosts',[$category->id, $genre->id]) }}" class="block border border-gray-500 text-center font-bold uppercase text-sm tracking-wider py-3 rounded text-orange-600 hover:text-yellow-300" >{{ $genre->name }}</a>

                @endforeach
           </div>

        </nav>

        <div class="main-part sm:w-4/5 ">
        
            <section class="">
        
                <h2 class="text-center text-yellow-400 text-xl sm:text-2xl font-normal italic shadow py-6">Kategorija: {{ $category->name }}</h2>

            </section>

            <section id="books" class="text-xl italic py-10 px-2">
    
                <div class="sm:flex sm:flex-wrap ">

                    @foreach($posts as $post)

                        <div class="sm:w-1/2 md:w-1/3 lg:1/4 text-center hover:text-yellow-400">
                        
                            <a href="{{ route('public.post',$post->id) }}" class="flex flex-col items-center md:p-3 lg:p-0">

                                <img src="{{ asset('images/posts/'.$post->img) }}" alt="{{ $post->title }}" class="h-56 w-48 border-4 rounded border-white">
                                <h5 class="text-lg mt-2">{{ $post->title }}</h5>
                                <p class="text-sm mb-5">{{ $post->autor }}</p> 
                                
                            </a>
                            
                        </div>

                    @endforeach
                
                </div>

                {{ $posts->links() }}

            </section>

        </div>

    </div>


@stop