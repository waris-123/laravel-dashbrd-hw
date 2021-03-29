@extends('layouts.app')


@section('content')

<div class="mt-28 bg-white max-w-lg mx-auto p-12 my-10 rounded-lg shadow-2xl">
        <div>
            <h3 class="font-bold text-green-500 text-center text-3xl">Welcome</h3>
            <p class="text-green-400 pt-2">Please Register</p>
        </div>

        <div class="mt-6">

            <form class="flex flex-col" method="POST" action="{{ route('register') }}">
            @csrf
                
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">name</label>
                    <input type="text" id="name" name="name" placeholder="Please enter your name" value="{{ old('name') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('name') border-red-500 @enderror">

                    @error('name')
                    <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Please enter your username" value="{{ old('username') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('username') border-red-500 @enderror">

                    @error('username')
                    <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                    </div>
                    @enderror
                </div>        

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Please enter your email" value="{{ old('email') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('email') border-red-500 @enderror">

                    @error('email')
                    <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Please insert your password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('password') border-red-500 @enderror">

                    @error('password')
                    <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password_confirmation">Re-type your password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="***************" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3 @error('password_confirmation') border-red-500 @enderror">

                    @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                    </div>
                    @enderror
                </div>

                <button class="bg-green-500 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl hover:bg-purple-900 transition duration-200 mt-2" type="submit">Sign up</button>
            </form>

            <div class="flex justify-center mb-4 mt-6">
                    <p>Already have and account?<a href="{{ route('login') }}" class="ml-1 text-sm text-gray-500 hover:text-purple-600 font-bold hover:underline ">Log in</a></p>
            </div>
  
        </div>
    </div>

@endsection

