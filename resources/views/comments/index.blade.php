@extends('layouts.app')


@section('content')


    @if(count($comments) > 0)
        <div class="bg-white pb-4 px-4 rounded-md w-full">
            <div class="flex w-full pt-6 justify-center">
                <p class="ml-3 text-2xl text-gray-600"> Comments </p>
            </div>

            <table class="table-auto border-collapse w-full">
                <thead>
                <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Title</th>
                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Name</th>
                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Email</th>
                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Text</th>
                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Ocena</th>
                    <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Naziv članka</th>
                </tr>
                </thead>
                <tbody class="text-sm font-normal text-gray-700">
                @foreach($comments as $comment)
                <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                    <td class="px-4 py-4">{{ $comment->title }}</td>
                    <td class="px-4 py-4">{{ $comment->name }}</td>
                    <td class="px-4 py-4">{{ $comment->email }}</td>
                    <td class="px-4 py-4">{{ $comment->text }}</td>
                    <td class="px-4 py-4">{{ $comment->mark }}</td>
                    <td class="px-4 py-4">
                        <i class="text-red-700">{{ $comment->post->title }}</i>
                        <div>Kategorija:&nbsp; <span class="font-bold">{{ $comment->post->category->name }}</span></div>
                    </td>
                    <td><a href="{{ route('comments.approve',$comment->id) }}" class="px-4 py-2 rounded shadow-md

                        @if( $comment->approve )
                            text-red-500 border border-red-500 hover:bg-red-500 hover:text-white
                        @else
                            text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white
                        @endif
                    
                        ">{{ $comment->approve ? 'Dont approve' : 'Approve' }}</a>
                    </td>
                    <td>
                        <form action="{{ route('comments.destroy',$comment->id) }}" method="Post">
                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Delete" class="border border-red-600 bg-red-600 text-white py-2 px-6 rounded hover:bg-red-500"> 
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h3 class="text-red-600 text-center text-2xl">No Comments</h3>
    @endif

@stop