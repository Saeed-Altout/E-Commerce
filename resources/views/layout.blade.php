<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>@yield('title')</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     @vite('resources/css/app.css')

</head>

<body class="bg-zinc-950">
     <header class="bg-zinc-900 h-[76px] fixed w-full top-0 z-50">
          <nav class="container flex items-center justify-between px-10 py-6 mx-auto">
               <a class="font-semibold text-white" href="{{ route('home.index') }}">E-Commerce</a>
               <ul class="items-center justify-between hidden gap-10 list-none lg:flex">
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.about') }}">About</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('computers.index') }}">Computers</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.products') }}">Products</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('computers.create') }}">Create</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.cart') }}">Cart</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.contact') }}">Contact</a></li>
               </ul>
               <button class="block text-white lg:hidden w-fit" id="toggle">
                    <img src="{{ url('images/menu.svg') }}" alt="menu">
               </button>
               <ul id="menuMobile" class="absolute duration-300 ease-in-out right-0 translate-x-[100%]  h-screen transition-transform top-[75px] bg-zinc-900 w-72 p-10 flex flex-col items-center justify-start gap-10 list-none lg:hidden">
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.about') }}">About</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('computers.index') }}">Computers</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('computers.create') }}">Create</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.contact') }}">Contact</a></li>
                    {{-- <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.products') }}">Products</a></li> --}}
                    {{-- <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('home.cart') }}">Cart</a></li> --}}
               </ul>
          </nav>
     </header>


     <main class="w-full overflow-x-hidden ">
          @yield('content')
     </main>


     <script src="{{ url('js/app.js') }}"></script>
</body>

</html>
