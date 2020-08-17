@extends('layouts.front')


@section('content')

    <div class="sm:flex">
    
        <div class="menu sm:w-1/5 px-10 sm:mr-8 sm:p-0">
        
           <div class="shadow-lg">
                @foreach( $genres as $genre )

                    <a href="{{ route('public.genrePosts',[$category->id, $genre->id]) }}" class="block border border-gray-500 text-center font-bold uppercase text-sm tracking-wider py-3 rounded text-orange-600 hover:text-yellow-300" >{{ $genre->name }}</a>

                @endforeach
           </div>

        </div>

        <div class="main-part sm:w-4/5 ">
        
            <section class="mx-auto">
        
                <h2 class="text-yellow-400 text-2xl text-center tracking-wider font-normal italic shadow py-6">Žanr: {{ $genreName }}</h2>

            </section>

            <section id="books" class="text-xl italic py-10 md:px-5">
    
                <div class="sm:flex sm:flex-wrap ">

                    @foreach($posts as $post)

                        <div class="sm:w-1/2 md:w-1/3 text-center hover:text-yellow-400">
                        
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