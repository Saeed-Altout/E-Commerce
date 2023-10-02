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
               <a class="font-semibold text-white " href="{{ route('home.index') }}">E-Commerce</a>
               <ul class="items-center justify-between hidden gap-10 ml-auto list-none md:flex">
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('about.index') }}">About</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('cart.index') }}">Cart</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('products.index') }}">Products</a></li>
               </ul>
               <button class="block ml-auto text-white md:hidden w-fit" id="toggle">
                    <img src="{{ url('images/menu.svg') }}" alt="menu">
               </button>
               <ul id="menuMobile" class="absolute duration-300 ease-in-out right-0 translate-x-[100%]  h-screen transition-transform top-[75px] bg-zinc-900 w-72 p-10 flex flex-col items-center justify-start gap-10 list-none md:hidden">
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('about.index') }}">About</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('cart.index') }}">Cart</a></li>
                    <li><a class="font-semibold text-gray-400 duration-300 ease-in-out hover:text-white" href="{{ route('products.index') }}">Products</a></li>
               </ul>

               <div class="relative ml-4 text-white">
                    <p id="profile-name" class="font-semibold text-white duration-300 ease-in-out cursor-pointer hover:underline"> {{ Auth::user()->name }}</p>
                    <div id="btn-logout" class="absolute right-0 px-5 py-10 rounded-lg top-10 bg-zinc-900">
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                         </form>
                    </div>
               </div>
          </nav>
     </header>




     <main class="w-full min-h-screen overflow-x-hidden">
          @yield('content')
     </main>



     <footer class="w-full py-5 text-center text-white bg-zinc-900">
          <p>&copy; 2023 <strong>E-Commerce</strong> All Right Reseirve.</p>
     </footer>


     <script src="{{ url('js/app.js') }}"></script>
</body>

</html>
