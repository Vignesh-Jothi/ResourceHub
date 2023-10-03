<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ResourceHub') }}
        </h2>
    </x-slot> -->

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    <!-- <body class="bg-[url({{asset('assets/images/svg/relaunch_day.svg')}})] bg-cover bg-no-repeat bg-black"> -->
	
	<!-- Hero Banner -->
	<section class="h-screen mx-30">
		<div class="grid place-content-center h-screen">
			<h1 class="text-4xl font-bold mt-8  text-center">ResourceHub</h1>
			<p class="mt-4 font-bold text-white bg-slate-600 p-3 rounded text-center">Your One Stop Resource for Everything</p>
		</div>
		<div class="absolute left-[50%] translate-x-[-50%] bottom-3">
			<a href="#res"><svg 
				xmlns="http://www.w3.org/2000/svg" 
				fill="none" 
				viewBox="0 0 24 24" 
				stroke-width="1.5" 
				stroke="currentColor" 
				class="w-7 h-7 animate-bounce sm:text-white md:text-black">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
			</svg>
		</a>
		</div>
	</section>
	<main class="mx-30 m-4" >
		<div class="" id="res"> 
			<h2 class="font-bold text-4xl text-center "> Resources </h2>
		</div>
		<!-- Page Title 1-->
        <div class="flex justify-center gap-3 m-9 ">
				<div class="w-64 h-12 bg-white rounded-full hover:bg-purple-700 ring-2 ring-white">
					<h3 class="text-black text-center p-3 font-bold hover:text-white ">Web Developement</h3>
				</div>
	  	</div>
		<!-- Title 1 Contents -->
		<div class="flex justify-between gap-3 m-9 text-black">
			@foreach($links as $link)
				<div class="w-64 h-40 bg-white rounded-3xl">
						<h3 class="text-center font-bold p-4">{{$link->type}}</h3>
						<h4 class="text-center mb-5">{{$link->name}}</h4>
						<div class="p-2 m-8  flex justify-center align-middle hover:text-white bg-purple-600 rounded-full hover:bg-purple-700 font-bold"> 
							<a href="{{$link->link}}" target="_blank">Click Here</a>
						</div>
				</div>
			@endforeach
		</div>

		<!--Page Title 2 -->
		<div class="flex justify-center gap-3 m-9 ">
			<div class="w-64 h-12 bg-white rounded-full hover:bg-purple-700  ring-2 ring-white">
				<h3 class="text-black text-center p-3 font-bold hover:text-white">Web Design</h3>
			</div>
	    </div>
		<!-- Title 2 Contents -->
		<div class="flex justify-between gap-3 m-9 text-black">
			<div class="w-64 h-40 bg-white rounded-3xl">
				<h3 class="text-center font-bold p-4">WEBSITES</h3>
				<h4 class="text-center mb-5">Free Code Camp</h4>
				<div class="p-2 m-8  flex justify-center align-middle hover:text-white bg-purple-600 rounded-full hover:bg-purple-700 font-bold"> 
					<a href="https://www.freecodecamp.org/" target="_blank">Click Here</a>
				</div>
				
			</div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>

		</div>

	  	<!-- Page Title 3 -->
	  	<div class="flex justify-center gap-3 m-9 ">
			<div class="w-64 h-12 bg-white rounded-full hover:bg-purple-700  ring-2 ring-white">
				<h3 class="text-black text-center p-3 font-bold hover:text-white">Road Maps</h3>
			</div>
  	 	</div>
		<!-- Title 3 Contents -->
		<div class="flex justify-between gap-3 m-9 text-black">
			<div class="w-64 h-40 bg-white rounded-3xl">
				<h3 class="text-center font-bold p-4">WEBSITES</h3>
				<h4 class="text-center mb-5">Free Code Camp</h4>
				<div class="p-2 m-8  flex justify-center align-middle hover:text-white bg-purple-600 rounded-full hover:bg-purple-700 font-bold"> 
					<a href="https://www.freecodecamp.org/" target="_blank">Click Here</a>
				</div>
				
			</div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>

		</div>

		<!-- Page Title 4 -->
  		<div class="flex justify-center gap-3 m-9 ">
			<div class="w-64 h-12 bg-white rounded-full hover:bg-purple-700  ring-2 ring-white">
				<h3 class="text-black text-center p-3 font-bold hover:text-white">ChatGPT</h3>
			</div>
		</div>
		<!-- Title 4 Contents -->
		<div class="flex justify-between gap-3 m-9 text-black">
			<div class="w-64 h-40 bg-white rounded-3xl">
				<h3 class="text-center font-bold p-4">WEBSITES</h3>
				<h4 class="text-center mb-5">Free Code Camp</h4>
				<div class="p-2 m-8  flex justify-center align-middle hover:text-white bg-purple-600 rounded-full hover:bg-purple-700 font-bold"> 
					<a href="https://www.freecodecamp.org/" target="_blank">Click Here</a>
				</div>
				
			</div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>
			<div class="w-64 h-40 bg-white rounded-3xl"></div>

		</div>
	
	
		
	</main>
</body>
</x-app-layout>
