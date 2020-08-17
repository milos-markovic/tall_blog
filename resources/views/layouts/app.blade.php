@extends('layouts.base')

@section('body')

    <header>
        <nav class="flex items-center justify-between flex-wrap bg-yellow-400 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a href="{{ url('/') }}" class="flex">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                    <span class="font-semibold text-xl tracking-tight">Blog</span>
                </a>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="{{ route('users.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Users
                    </a>
                    <a href="{{ route('categories.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Categories
                    </a>
                    <a href="{{ route('genres.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Genres
                    </a>
                    <a href="{{ route('posts.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Posts
                    </a>
                    <a href="{{ route('comments.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
                        Comments
                    </a>
                </div>
                <div>
                    @if(Auth::user())
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout" class="inline-block text-sm px-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-black hover:bg-white mt-4 lg:mt-0">
                        </form>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="container mx-auto py-10">

            @if (session('status'))
                <div x-data="{ open: true }">

                    <div x-show="open" >

                        <div class="bg-green-200 border border-green-400 text-green-700 text-center px-4 mb-10 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('status') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg @click="open = false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                        </div>
                    
                    </div>
                
                </div>
            @endif

            @yield('content')
        
        </div>
    
    </main>

    <footer>
            @if( Request::is('users') || Request::is('categories') || Request::is('users/*') || Request::is('categories/*') || Request::is('genres/*') || Request::is('comments') )
                <div class="border-t-2 border-yellow-400  bottom-0 p-2 text-center w-full fixed">
                    <div class="container mx-auto">
                        <p class="m-0">Napravio: Milos Markovic</p>     
                    </div>   
                </div>
            @else
                <div class="border-t-2 border-yellow-400 p-2 text-center w-full">
                    <div class="container mx-auto">
                        <p class="m-0">Napravio: Milos Markovic</p>     
                    </div>   
                </div>
            @endif
    </footer>

    <script>

        setTimeout(() => {
            
            $("#errors").remove();

        }, 3000);        
    
    </script>
@endsection
