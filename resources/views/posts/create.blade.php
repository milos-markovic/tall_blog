@extends('layouts.app')


@section('content')


    <h2 class="text-center text-4xl mb-10">Create Post:</h2>



    <div class="w-full max-w-xl mx-auto">
    
        @include('validationErrors')

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-10">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Title">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="autor">
                    Autor
                </label>
                <input name="autor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Autor">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Description
                </label>
                <textarea name="description" id="" cols="30" rows="5" class="description shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Content"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Category
                </label>
                <select name="category_id" id="category" class="w-full shadow p-2 border text-gray-700">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4" id="genres">
                <!-- here insert genres after ajax response -->
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="img">
                    Image
                </label>
                <input type="file" name="img" id="img" class="bg-transparent hover:bg-red-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            </div>
            <div class="text-center">
                <input type="submit" value="Create Post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
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