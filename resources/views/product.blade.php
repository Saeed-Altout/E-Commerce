@extends('layout')
@section('title', 'Product')

@section('product')
     <div class="container w-full px-10 mx-auto">
          <div class="w-full flex-col lg:flex-row h-screen flex justify-center lg:justify-between gap-20 pt-20 items-center">
               <div class="max-w-3xl">
                    <h1 class="text-4xl lg:text-6xl lg:text-left text-center font-bold text-white">
                         Welcome In E-Commerce,
                         <br class="hidden lg:block">
                         Here You Will Find Your Dream
                    </h1>
                    <p class="mt-5 text-gray-400 font-normal text-base lg:text-lg text-center lg:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis deleniti explicabo deserunt. Numquam reprehenderit ratione voluptas adipisci eos minus nam quod ipsam perspiciatis beatae libero, in quidem aliquam odio?</p>
               </div>

               <div class="max-w-md">
                    <img class="w-full h-full object-cover" src="{{ url('images/hero.png') }}" alt="Hero">
               </div>
          </div>


     </div>
@endsection
