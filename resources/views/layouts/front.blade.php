@extends('layouts.base')

@section('body')

    <header style="background: #282825;">
        
        <nav class="p-4 md:p-2">
            <div class="container mx-auto md:flex md:justify-between md:items-center">

                <div class="text-white">
                    <a href="{{ url('/') }}" class="flex text-yellow-300">
                        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                        <span class="font-semibold text-xl tracking-tight">Blog</span>
                    </a>
                </div>

                <div class="my-5 flex justify-center" >
                    <form action="" method="POST"  class="relative">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="absolute top-2 left-2 search-circle w-6 h-6"><path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd"></path></svg>

                        <input type="text" name="" id="search" placeholder="Quick Search" class="bg-transparent border text-center px-4 py-2 rounded-full placeholder-yellow-400" style="background: #1d1d1d;">
                        <div id="searchResult" class="z-10 absolute" style="background: #282825;"></div>
                    </form>
                </div>

                @if( Auth::user() )
                    
                    <a href="{{ route('posts.index') }}" class="border border-yellow-300 px-4 py-2 rounded-lg hover:bg-yellow-300 hover:text-gray-600 text-sm tracking-wider">Admin</a>

                @else

                    <div class="flex justify-center ">
                        <a href="{{ url('login') }}" class="hover:text-yellow-300">Login</a>
                        <span class="mx-3">|</span>
                        <a href="{{ url('register') }}" class="hover:text-yellow-300">Register</a>
                    </div>

                @endif

            </div>
        </nav>
        <nav class="border-b border-t border-gray-500">
            <div class="container mx-auto flex justify-center md:justify-start">
                @foreach($menuItems as $item)
                    <a href="{{ route('public.categoryPosts',$item->id) }}" class="py-2 pr-4 inline-block text-gray-500 hover:text-yellow-300 tracking-widest font-bold uppercase text-sm">{{ $item->name }}</a>
                @endforeach
            </div>
        </nav>
        
    </header>

    <main class="">

        <div class="container mx-auto py-10">

                @if (session('status'))
                    <div x-data="{ open: true }">

                        <div x-show="open" class="bg-green-200 border border-green-400 text-green-700 text-center px-4 py-3 mb-8 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('status') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg @click="open = false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                        </div>

                    </div>
                @endif
            

            @yield('content')
        
        </div>
    
    </main>

    <footer>
        @if (Request::is('users') || Request::is('users/*') || Request::is('categories') || Request::is('categories/*') || Request::is('genres') ||  Request::is('genres/*') )

            <div class="p-2 text-center text-white w-full fixed bottom-0 border-t border-gray-400" style="background: #282825;">
                <div class="container mx-auto">
                    <p>Napravio: Milos Markovic</p>     
                </div>   
            </div>
            
        @else
        
            <section class="py-8 border-t border-b border-gray-400 p-0 sm:px-5">
                <div class="container mx-auto">
                    <div class="sm:flex">

                        <div class="sm:w-1/3 text-center">
                            <h5 class="text-center text-xl italic mb-4 text-orange-500 tracking-wider">Korisni Linkovi</h5>
                            <ul class="list-disc">
                                <li><a href="" class="hover:text-yellow-300">Facebook</a></li>
                                <li><a href="" class="hover:text-yellow-300">Twetter</a></li>
                            </ul>
                        </div>
                        <div class="sm:w-1/3 my-5 sm:m-0 text-center">
                            <h5 class="text-center text-xl italic mb-4 text-orange-500 tracking-wider">Zanimljivosti</h5>
                            <ul class="list-disc">
                                <li><a href="" class="hover:text-yellow-300">Facebook</a></li>
                                <li><a href="" class="hover:text-yellow-300">Twetter</a></li>
                            </ul>
                        </div>
                        <div class="sm:w-1/3 text-center">
                            <h5 class="text-center text-xl italic mb-4 text-orange-500 tracking-wider">Društvene mreže</h5>
                            <ul class="list-disc">
                                <li><a href="" class="hover:text-yellow-300">Facebook</a></li>
                                <li><a href="" class="hover:text-yellow-300">Twetter</a></li>
                                <li><a href="" class="hover:text-yellow-300">Youtube</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
            <section class="mx-auto text-center py-2" style="background: #1d1d1d;">
                <div>Napravio: Milos Markovic</div>     
            </section>   
        
        @endif
    </footer>

    <script>
        $(document).ready(function(){

            let searchField = $("#search");

            searchField.keyup(function(e){

                let value = $(this).val();

                if(value.length > 0){

                    $.ajax({
    
                        url: "{{ url('/search') }}",
                        method: 'POST',
                        data: { search : value, _token: '{{csrf_token()}}' },
                        //dataType: "json",
    
                    }).done(function(res){
                        
                        $("#searchResult").html(res);
                    });               

                }else{
                    $("#searchResult").html("");
                }

            })

        });
    
    </script>
@endsection
