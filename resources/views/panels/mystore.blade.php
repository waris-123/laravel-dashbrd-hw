@extends('layouts.app')


@section('content')

<section class="bg-white mt-20">

<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

<nav id="store" class="w-full z-30 top-0 px-6 py-1">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-6 px-2 py-2">
        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="{{ route('mystore') }}"><span class="text-green-500">Welcome</span> to my <span class="text-red-500">store</span></a>

        <div class="flex items-center">

            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                </svg>
            </a>

            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                </svg>
            </a>

        </div>
  </div>
</nav>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic7.jpg" alt="store1">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic2.jpg" alt="store2">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic3.jpg" alt="store3">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic4.jpg" alt="store4">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic5.jpg" alt="store5">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic6.jpg" alt="store6">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic7.jpg" alt="store7">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-xl rounded-xl" style="width:330px; height:330px;" src="img/pic5.jpg" alt="store8">
        <div class="pt-3 flex items-center justify-between">
            <p class="text-red-500 ml-2">Product Name</p>
            <p class="pt-1 text-green-500 mr-4">£9.99</p>
        </div>
    </a>
</div>

</div>


</section>


@endsection