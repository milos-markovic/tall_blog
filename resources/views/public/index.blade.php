@extends('layouts.front')


@section('content')

    <section class="border border-yellow-400 md:border-none rounded mx-10">
    
        <h2 class="text-center text-yellow-400 text-lg  md:text-xl xl:text-2xl  font-normal italic shadow px-4 py-6">Ovde možete naći sve o vašoj omiljenoj knjizi ili filmu</h2>

    </section>

    <section id="books" class="text-xl italic py-5 sm:px-2">
    
        <h3 class="tracking-wider uppercase text-orange-600 text-center md:text-left mb-10">Zadnje od knjiga</h3>

        <div class="sm:flex flex-wrap">

            @foreach($books as $book)

                <div class="sm:w-1/2 md:w-1/4 p-3 xl:p-1  text-center hover:text-yellow-400">
                
                    <a href="{{ route('public.post',$book->id) }}" class="flex flex-col items-center">
                        <img src="{{ asset('images/posts/'.$book->img) }}" alt="{{ $book->title }}" class="h-72 w-60 md:h-56 xl:h-72  border-4 rounded border-white">
                        <h5 class="text-lg mt-2">{{ $book->title }}</h5>
                        <p class="text-sm mb-5">{{ $book->autor }}</p> 
                    </a>
                    
                </div>

            @endforeach
        
        </div>

    </section>

    <section id="film" class="text-xl italic py-5 sm:px-2">
    
        <h3 class="tracking-wider uppercase text-orange-600 text-center md:text-left mb-10">Zadnje od filmova</h3>

        <div class="sm:flex flex-wrap">

            @foreach($movies as $movie)

                <div class="sm:w-1/2 md:w-1/4 p-3 xl:p-1  text-center hover:text-yellow-400">
                
                    <a href="{{ route('public.post',$movie->id) }}" class="flex flex-col items-center">
                        <img src="{{ asset('images/posts/'.$movie->img) }}" alt="{{ $book->title }}" class="h-72 w-60 md:h-56 xl:h-72  border-4 rounded border-white">
                        <h5 class="text-lg mt-2">{{ $movie->title }}</h5>
                        <p class="text-sm mb-5">{{ $movie->autor }}</p>
                    </a>
                    
                </div>

            @endforeach
        
        </div>

    </section>

    <section id="igrice" class="text-xl italic py-5 sm:px-2">
        
        <h3 class="tracking-wider uppercase text-orange-600 text-center md:text-left mb-10">Zadnje od Igrica</h3>

        <div class="sm:flex flex-wrap">

            @foreach($games as $game)

                <div class="sm:w-1/2 md:w-1/4 p-3 xl:p-1  text-center hover:text-yellow-400">
                
                    <a href="{{ route('public.post',$game->id) }}" class="flex flex-col items-center">
                        <img src="{{ asset('images/posts/'.$game->img) }}" alt="{{ $game->title }}" class="h-72 w-60 md:h-56 xl:h-72  border-4 rounded border-white">
                        <h5 class="text-lg mt-2">{{ $game->title }}</h5>
                        <p class="text-sm mb-5">{{ $game->autor }}</p>
                    </a>
                    
                    
                </div>

            @endforeach
        
        </div>

    </section>

    <section id="muzika" class="text-xl italic py-5 sm:px-2">
        
        <h3 class="tracking-wider uppercase text-orange-600 text-center md:text-left mb-10">Zadnje od Muzike</h3>

        <div class="sm:flex flex-wrap">

            @foreach($musics as $music)

                <div class="sm:w-1/2 md:w-1/4 p-3 xl:p-1  text-center hover:text-yellow-400">
                
                    <a href="{{ route('public.post',$music->id) }}" class="flex flex-col items-center">
                        <img src="{{ asset('images/posts/'.$music->img) }}" alt="{{ $music->title }}" class="h-72 w-60 md:h-56 xl:h-72  border-4 rounded border-white">
                        <h5 class="text-lg mt-2">{{ $music->title }}</h5>
                        <p class="text-sm mb-5">{{ $music->autor }}</p>
                    </a>
                      
                </div>

            @endforeach
        
        </div>

    </section>

@stop