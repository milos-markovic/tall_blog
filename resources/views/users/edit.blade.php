@extends('layouts.app')


@section('content')


    <h2 class="text-center text-4xl font-light mb-10">Update User: <span class="text-red-700 font-bold">{{ $user->name }}</span></h2>

    <div class="w-full max-w-xl mx-auto">

        @include('validationErrors')
    
        <form action="{{ route('users.update',$user->id) }}" method="POST" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Name
                </label>
                <input name="name" value="{{ $user->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Email
                </label>
                <input name="email" value="{{ $user->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input name="password" value="{{ $user->password }}" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
            </div>
            <div class="text-center">
                <input type="submit" value="Update User" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>
        
    </div>
    

    
    
@stop