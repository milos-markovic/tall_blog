@extends('layouts.app')


@section('content')


    <div class="bg-white pb-4 px-4 rounded-md w-full">
        <div class="flex w-full pt-6 justify-center">
            <p class="ml-3 text-2xl text-gray-600"> Users </p>
        </div>

        <table class="table-auto border-collapse w-full">
            <thead>
            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Name</th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8">Email</th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
            </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
            @foreach($users as $user)
            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4">{{ $user->name }}</td>
                <td class="px-4 py-4">{{ $user->email }}</td>
                <td><a href="{{ route('users.edit',$user->id) }}" class="px-4 py-2 bg-blue-500 rounded text-white">Update</a></td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="Post">
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

@stop