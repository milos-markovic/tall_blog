@extends('layouts.app')


@section('content')



    <h2 class="text-center text-4xl mb-5">Posts:</h2>

    @if( count($posts) )

        <div class="bg-white pb-4 px-4 rounded-md w-full">
                <table class="table-auto border-collapse w-full text-center">
                    <thead>
                        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                            <th class="px-4 py-2 bg-gray-200 text-center">Image</th>
                            <th class="px-4 py-2 bg-gray-200 text-center">Title</th>
                            <th class="px-4 py-2 bg-gray-200 text-center">content</th>
                            <th class="px-4 py-2 bg-gray-200 text-center">category</th>
                            <th class="px-4 py-2 bg-gray-200 text-center"></th>
                            <th class="px-4 py-2 bg-gray-200 text-center"></th>
                            <th class="px-4 py-2 bg-gray-200 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">
                        @foreach($posts as $post)
                        <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                            <td class="px-4 py-4"><img src="{{ asset('images/posts/'.$post->img) }}" class="h-20 w-20 border-double border-4 border-gray-600" alt="{{ $post->title }}"></td>
                            <td class="px-4 py-4">{{ $post->title }}</td>
                            <td class="px-4 py-4">{!! Str::words($post->description,40) !!}</td>
                            <td class="px-4 py-4">{{ $post->category->name }}</td>
                            <td class="px-4 py-4"><a href="{{ route('posts.show',$post->id) }}" class="text-blue-600">Details</a></td>
                            <td class="px-4 py-4"><a href="{{ route('posts.edit',$post->id) }}" class="px-4 py-2 bg-blue-500 rounded text-white">Update</a></td>
                            <td class="px-4 py-4">
                                <form action="{{ route('posts.destroy',$post->id) }}" method="Post" >
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
        <h3 class="text-2xl">Create Post</h3>
    @endif

    <div>
        {{ $posts->links() }}
    </div>

    <a href="{{ route('posts.create') }}" class=" inline-block mt-5 border border-blue-600 bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-500">Create Post</a>




@stop