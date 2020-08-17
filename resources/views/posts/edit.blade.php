@extends('layouts.app')


@section('content')


    <h2 class="text-center text-4xl mb-10">Update Post: <span class="text-red-600">{{ $post->title }}</span></h2>


    <div class="w-full max-w-xl mx-auto">

        @include('validationErrors')
    
        <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-10">
            @csrf
            @method('PUT')

            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input name="title" value="{{ $post->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Title">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="autor">
                    Autor
                </label>
                <input name="autor" value="{{ $post->autor }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Autor">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Description
                </label>
                <textarea name="description"  id="" cols="30" rows="5" class=" description shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Content">{{ $post->description }}</textarea>
                <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Category
                </label>
                <select name="category_id" id="category" class="w-full shadow p-2 border text-gray-700">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                        
                            @if( $category->id === $post->category->id )
                                selected
                            @endif
                        
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4" id="genres">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="genres">
                    Genres
                </label>
                <select name="genre" id="genre" class="w-full shadow p-2 border text-gray-700">
                    @foreach($genres as $genre)
                        <option  value="{{ $genre->name }}"
                        
                            @if( $genre->name === $post->genre )
                                selected
                            @endif
                        
                        >{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <img src="{{ asset('images/posts/'.$post->img) }}" alt="{{ $post->title }}" class="h-20">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="img">
                    Image
                </label>
                <input type="file" name="img" id="img" class="bg-transparent hover:bg-red-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            </div>
            <div class="text-center">
                <input type="submit" value="Update Post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>
        
    </div>
    
    <script>
        tinymce.init({
            selector:'textarea',
            height: 200
        });
    </script>
    
    <script>
    
        $(document).ready(function(){

            $("#category").change(insertGenreDropdown);

            function insertGenreDropdown(){

                let categoryId = $(this).val();

                $.ajax({
                    url: '/insertGenreDropdown',
                    method: 'GET',
                    data: { categoryId: categoryId, _token: '{{csrf_token()}}' },
                }).done(function(res){

                    $("#genres").html( res );
                });
            }
        });

    </script>
@stop