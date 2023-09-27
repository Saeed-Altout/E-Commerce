<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{ $variant = 'register' }}

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Auth</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     @vite('resources/css/auth.css')

</head>

<body class="bg-zinc-950 h-screen">
     <div class=" flex justify-center items-center h-full w-full">
          <div class="md:bg-zinc-800 max-w-md w-full px-5 py-10 rounded-xl">
               <h class="text-4xl font-bold text-white">
                    @if ($variant == 'login')
                         Login
                    @else
                         Register
                    @endif
               </h>
               <div class="mt-5">
                    <form action="" method="POST" class="flex flex-col gap-5">
                         @if ($variant == 'register')
                              <div class="flex flex-col gap-2">
                                   <label for="username" class="text-white text-xl">Name</label>
                                   <input type="text" name="username" id="username" placeholder="Your Name" class="bg-zinc-700 block px-4 py-2 rounded-lg placeholder:text-white text-white border-none outline-none">
                              </div>
                         @endif

                         <div class="flex flex-col gap-2">
                              <label for="email" class="text-white text-xl">Email</label>
                              <input type="text" name="email" id="email" placeholder="E-mail" class="bg-zinc-700 block px-4 py-2 rounded-lg placeholder:text-white text-white border-none outline-none">
                         </div>
                         <div class="flex flex-col gap-2">
                              <label for="password" class="text-white text-xl">Password</label>
                              <input type="text" name="password" id="password" placeholder="Password" class="bg-zinc-700 block px-4 py-2 rounded-lg placeholder:text-white text-white border-none outline-none">
                         </div>
                         <div>
                              <button class="bg-red-500 hover:bg-red-600 duration-200 ease-linear text-white font-semibold py-2 w-full block rounded-lg">
                                   @if ($variant == 'login')
                                        Login
                                   @else
                                        Sign up
                                   @endif
                              </button>
                         </div>
                         <div>
                              <p class="text-gray-400">

                                   @if ($variant == 'login')
                                        Enjoy with us?
                                   @else
                                        You have already account?
                                   @endif
                                   <strong class="text-white hover:underline cursor-pointer">
                                        @if ($variant == 'login')
                                             Register
                                        @else
                                             Login
                                        @endif
                                   </strong>
                              </p>
                         </div>
                    </form>
               </div>
          </div>
     </div>


     <script src="{{ url('js/app.js') }}"></script>
</body>

</html>
