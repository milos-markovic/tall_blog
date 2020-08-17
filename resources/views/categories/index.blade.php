@extends('layouts.app')


@section('content')

<div class="sm:flex justify-between">

    <div class="sm:w-2/3 px-10 sm:p-0 sm:mr-10 md:mr-20 mb-10">

        @if( count($categories) )

            <h2 class="text-3xl text-center text-gray-400 my-5">Categories</h2>

            <div class="bg-white pb-4 px-4 rounded-md w-full">
                <table class="table-auto border-collapse w-full text-center">
                    <thead>
                        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                            <th class="px-4 py-2 bg-gray-200 text-center" style="background-color:#f8f8f8">Name</th>
                            <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
                            <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">
                        @foreach($categories as $category)
                        <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                            <td class="px-4 py-4">{{ $category->name }}</td>
                            <td><a href="{{ route('categories.edit',$category->id) }}" class="px-4 py-2 bg-blue-500 rounded text-white">Update</a></td>
                            <td>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="Post" >
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Delete" class="px-4 py-2 bg-red-600 rounded text-white"> 
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @else

            <h3 class="text-xl text-center">Create New Category</h3>

        @endif

    </div>

    <div class="sm:w-1/3">

        <h2 class="text-3xl text-center my-5">Create Category</h2>

        <div class="w-full max-w-md mx-auto">

            @include('validationErrors')

            <form action="{{ route('categories.store') }}" method="POST" class="items-center bg-gray-700 border shadow-md rounded p-4">
                
                @csrf
                <div class="mb-4 mr-1">
                    <label class="block text-sm font-bold mb-2" for="username">
                        Category Name
                    </label>
                    <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Category Name">
                </div>
                <div class="mt-3">
                    <input type="submit" value="Create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 sm:py-1 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
                
            </form>
        </div>

    </div>

</div>


@stop