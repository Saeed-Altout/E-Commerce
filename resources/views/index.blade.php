@extends('layout')
@section('title', 'Home')

@section('content')
     <div class="container w-full px-10 mx-auto">
          <div class="flex flex-col items-center justify-center w-full h-screen gap-20 pt-20 lg:flex-row lg:justify-between">
               <div class="max-w-3xl">
                    <h1 class="text-4xl font-bold text-center text-white lg:text-6xl lg:text-left">
                         Welcome In E-Commerce,
                         <br class="hidden lg:block">
                         Here You Will Find Best Products
                    </h1>
                    <p class="mt-5 text-base font-normal text-center text-gray-400 lg:text-lg lg:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis deleniti explicabo deserunt. Numquam reprehenderit ratione voluptas adipisci eos minus nam quod ipsam perspiciatis beatae libero, in quidem aliquam odio?</p>
               </div>

               <div class="max-w-md">
                    <img class="object-cover w-full h-full" src="{{ url('images/hero.png') }}" alt="Hero">
               </div>
          </div>
     </div>
@endsection


