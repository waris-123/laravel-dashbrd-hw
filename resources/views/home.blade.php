@extends('layouts.app')


@section('content')

<section class="bg-white mt-20">

<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

<nav id="store" class="w-full z-30 top-0 px-6 py-1">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">
        <a class="uppercase tracking-wide no-underline hover:underline font-bold text-gray-800 text-3xl shadow-lg rounded p-4" href="{{ route('mystore') }}">Welcome to <span class="text-red-500">Waris Store</span></a>
  </div>
</nav>
    <div class="flex">
        <div class="p-6 ml-48">
            <a href="{{ route('login')}}"><img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic7.jpg" alt="store1">
                <div class="pt-3 flex items-center justify-between">
                    <p class="text-red-500 ml-2">Product Name</p>
                    <p class="pt-1 text-green-500 mr-4">£9.99</p>
                </div>
            </a>
        </div>

        <div class="p-6 ml-96">
            <a href="{{ route('login') }}">
                <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic2.jpg" alt="store2">
                <div class="pt-3 flex items-center justify-between">
                    <p class="text-red-500 ml-2">Product Name</p>
                    <p class="pt-1 text-green-500 mr-4">£9.99</p>
                </div>
            </a>
        </div>

    </div>
</div>


</section>

@endsection