
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-black-alt font-sans leading-normal tracking-normal">

<nav id="header" class="bg-gray-600 fixed w-full z-10 top-0 shadow">
	

		<div class="w-full container mx-auto flex flex-wrap justify-between items-center mt-0 pt-3 pb-0">
				
			 <div class="w-1/2 pl-0">
				<a class="text-gray-100 text-3xl ml-8 no-underline hover:underline font-bold"  href="{{ route('home') }}"> 
					<i class="fas fa-moon text-blue-400 pr-3"></i> Waris Store
				</a>
             </div>    
	    </div>


			<div class="w-full flex justify-between items-center w-auto block mt-0 bg-gray-600 z-20" id="nav-content">
				<div>
				<ul class="list-reset flex flex-1 items-center px-0">
					
                    <li class="mr-6 my-0">
                        <a href="{{route('home')}}" class="block py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100 border-b-2 border-green-500 hover:border-blue-500">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-0 text-sm">Home</span>
                        </a>
                    </li>

					<li class="mr-6 my-0">
                        <a href="{{ route('mystore')}}" class="block py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100 border-b-2 border-green-500 hover:border-pink-500">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-0 text-sm">My Store</span>
                        </a>
                    </li>
                    @auth
						<li class="mr-6 my-0">
							<a href="{{ route('admin')}}" class="block py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100 border-b-2 border-green-500 hover:border-purple-500">
								<i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-0 text-sm">Admins</span>
							</a>
						</li>
					@endauth
				</ul>
				</div>
				<div>
					<ul class="list-reset flex flex-1 items-center px-0">
					@guest
						<li class="mr-6 my-0 flex">
							<a href="{{ route('login')}}" class="block py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100 border-b-2 border-green-500 hover:border-yellow-500">
								<i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-0 text-sm">Login</span>
							</a>
						</li>

						<li class="mr-6 my-0">
							<a href="{{ route('register')}}" class="block py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100 border-b-2 border-green-500 hover:border-yellow-500">
								<i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-0 text-sm">Register</span>
							</a>
						</li>
					@endguest

					@auth
						<li class="mr-6 my-0">
							<a href="#" class="block py-3 pl-1 align-middle text-white no-underline hover:text-gray-100 border-b-2 border-green-500 capitalize hover:border-yellow-400">
								<i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-0 text-sm">{{ auth()->user()->name }}</span>
							</a>
						</li>

						<li class="mr-6 my-0">
							<form action="{{ route('logout') }}" method="post">
							@csrf
								<button type="submit" class="inline=block py-3 pl-1 align-middle text-gray-400 hover:text-red-500 border-b-2 border-white hover:border-red-500">Logout
								</button>
							</form>
						</li>
					@endauth
				</ul>
				</div>
			</div>
		</div>
	</nav>

        @yield ('content')

	<!--Container-->
	
	<footer class="bg-gray-600 border-t border-gray-600 shadow">	
		<div class="container max-w-4xl mx-auto flex py-8">

			<div class="w-full mx-auto flex">
				<div class="w-full mr-12">
					<div class="px-8">
						<h3 class="font-bold font-bold text-gray-100">About</h3>
						<p class="py-4 text-gray-200 text-sm">
						A panel painting is a painting made on a flat panel made of wood, either a single piece, The earliest forms of panel painting were dossals (altar backs), altar fronts and crucifixes. A. 
						</p>
					</div>
				</div>
				
				<div class="flex w-full justify-center">
					<div class="px-8 ml-12">
					<h3 class="font-bold font-bold text-gray-100">Social</h3>
                    <ul class="list-reset items-center text-sm pt-3">
                        <li class="flex">
                            <img class="w-5 h-5 mt-1 mr-2 rounded-full" src="/img/facebook.png" alt="Facebook logo">
                            <a class="inline-block text-gray-200 no-underline hover:text-green-500 py-1" href="www.facebook.com">Facebook</a>
                        </li>
                        <li class="flex mt-2">
                            <img class="w-5 h-5 mt-1 mr-2 rounded-full" src="/img/github.png" alt="Github logo">
                            <a class="inline-block text-gray-200 no-underline hover:text-green-500 py-1" href="www.github.com">Github</a>
                        </li>
                        <li class="flex mt-2">
                            <img class="w-5 h-5 mt-1 mr-2 rounded-full" src="/img/twitter.png" alt="Twitter logo">
                            <a class="inline-block text-gray-200 no-underline hover:text-green-500 py-1" href="www.twitter.com">Twitter</a>
                        </li>
                    </ul>
					</div>
				</div>
			</div>		
		</div>
	</footer>

</body>
</html>
