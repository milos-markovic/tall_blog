@extends('layouts.front')


@section('content')

    <div class="sm:flex ">
    
        <div class="px-10 sm:w-2/6 sm:px-4 md:w-2/12 md:p-0 md:ml-3 lg:m-0">

            <img src="{{ asset('images/posts/'.$post->img) }}" alt="{{ $post->title }}" class="w-full border-double border-4 border-white">
            
            <p class="text-center mt-3">Žanr: <span class="font-bold">{{ $post->genre }}</span></p>

        </div>

        <div class="px-10 sm:w-4/6 md:w-7/12">

            <header>
                <h2 class="text-3xl text-orange-600 font-bold tracking-wider italic">{{ $post->title }}</h2>
                <div>Autor: &nbsp; <span class="text-yellow-300">{{ $post->autor }}</span></div>
                <div>Kategorija: <span class="font-bold">&nbsp; {{ $post->category->name }}</span></div>

                <div class="border border-gray-500 my-3"></div>
            </header>
           
            <section>

                <p>{!! $post->description !!}</p>

            </section>

            <section>

                <div x-data="{ open: false }">

                    <h3 class="text-2xl mb-4 text-yellow-300 italic">Komentari</h3>

                    <input type="text" name="" id="" class="py-2 px-2 w-full mb-4 placeholder-black" placeholder="Ostavi komentar" @click="open = true">

                    <div x-show="open">
                    
                        <form action="{{ route('comments.store') }}" method="POST" class="">
                            @csrf

                            <input type="hidden" name="post_id" value="{{ $post->id }}">

                            <div class="mb-5">
                                <label for="" class="block">Ocena</label>
                                <select name="mark" id="" class="w-full py-2 text-center bg-transparent border border-gray-400">
                                    @for( $i=1; $i <= 5; $i++ )

                                        <option value="{{ $i }}" class="text-black">Ocena {{ $i }}</option>

                                    @endfor
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="" class="block" >Naslov</label>
                                <input type="text" name="title" id="" class="bg-transparent border border-gray-400 px-4 py-1 w-full">
                            </div>
                            <div class="mb-5">
                                <label for="" class="block" >Ime</label>
                                <input type="text" name="name" id="" class="bg-transparent border border-gray-400 px-4 py-1 w-full">
                            </div>
                            <div class="mb-5">
                                <label for="" class="block" >Email</label>
                                <input type="text" name="email" id="" class="bg-transparent border border-gray-400 px-4 py-1 w-full">
                            </div>
                            <div class="mb-5">
                                <label for="" class="block" >Text</label>
                                <textarea name="text" id="" cols="30" rows="5" class="bg-transparent border border-gray-400 px-4 py-1 w-full"></textarea>
                            </div>
                            <div class="mb-5 flex justify-between">
                                <a href="#" class="bg-red-600 px-4 py-2 text-white tracking-wider hover:bg-red-500" @click.prevent="open = false">Zatvori</a>
                                <input type="submit" value="Pošalji" class="bg-blue-600 px-4 py-2 text-white tracking-wider hover:bg-blue-500">
                            </div>
                        </form>
                    
                    </div>
                
                </div>
            
            </section>


            <section class="mt-10">
                @foreach($post->comments as $comment)
            
                    @if( $comment->approve )

                        <div class="mb-2">
                            <div>{{ $comment->created_at }}</div>
                            <div class="text-white">Naslov: {{ $comment->title }}</div>
                            <div class="text-gray-400">Ime:&nbsp; <span class="italic">{{ $comment->name }}</span></div>
                            <div>Komentar:&nbsp;  <span class="text-red-500 font-bold">{{ $comment->text }}</span></div>
                            <div class="flex">
                                <span>Ocena: </span>&nbsp;
                                @for( $i=1; $i <= (int)$comment->mark; $i++ )
                                    <div class="text-yellow-300">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="star w-6 h-6"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                @endfor
                            </div>
                            <br>          
                        </div>
                        
                    @endif

                @endforeach
            </section>
         

        </div>

        <div class="px-10 sm:hidden md:w-3/12 md:block">

            <section>

                <h2 class="text-center text-lg text-yellow-400 font-bold tracking-wider italic">Iz istog žanra</h2>

                <div class="md:flex flex-wrap">
                    
                    @foreach($similarPosts as $post)

                        <div class="md:w-1/2 p-2">
                        
                            <a href="{{ route('public.post',$post->id) }}" class="hover:text-yellow-300">
                                <img src="{{ asset('images/posts/'.$post->img) }}" alt="{{ $post->title }}" class="border rounded w-full h-28">
                                <p class="mb-0 text-sm text-center mt-1">{{ $post->title }}</p>
                            </a>
                        
                        </div>

                    @endforeach

                </div>
            
            </section>

        </div>
    
    </div>

    

    <section>
        <div class="mx-10">
        
            <h3 class="text-xl font-bold text-center mb-3 italic tracking-wider text-yellow-300">Iz iste kategorije</h3>

            <div class="flex flex-wrap justify-center">
            
                @foreach($category->posts as $post)

                    <a href="{{ route('public.post',$post->id) }}" class="sm:w-1/2 sm:p-4  md:w-1/4  lg:w-1/8 lg:p-2 lg:w-32 hover:text-yellow-300">
                        <img src="{{ asset('images/posts/'.$post->img) }}" alt="{{ $post->title }}" class="sm:h-64 sm:w-full lg:h-40 border rounded">
                        <h5 class="mt-1 text-center text-sm">{{ $post->title }}</h5>
                    </a>

                @endforeach

            </div>
        
        </div>
    </section>
@stop