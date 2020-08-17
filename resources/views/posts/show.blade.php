@extends('layouts.app')


@section('content')


    <h2 class="text-center text-4xl mb-10">Details of post: <span class="text-red-600">{{ $post->title }}</span></h2>



    
        <table class="mt-10 mx-auto">
            <thead>
                <tr>
                    <th>Genre</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="border px-6 py-6 text-sm">{{ $post->genre }}</td>
                    <td class="border px-6 py-6 text-sm">{{ $post->created_at->diffForHumans() }}</td>
                    <td class="border px-6 py-6 text-sm">{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
            </tbody>
        </table>



    
    
@stop