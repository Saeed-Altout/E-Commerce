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

               {{-- <div class="max-w-md">
                    <img class="object-cover w-full h-full" src="{{ url('images/hero.png') }}" alt="Hero">
               </div> --}}
          </div>

          <div class="py-40">
               <h1 class="text-4xl font-bold text-white">Products</h1>

               <div class="mt-10">
                    <div class="grid grid-flow-row grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                         <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                              <img src="{{ url('images/product_single_01.jpg') }}" alt="product-01" class="object-cover w-full h-[300px]">
                              <div class="p-8 leading-8">
                                   <div class="flex items-center justify-between">
                                        <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                        <span class="font-normal text-gray-300">24$</span>
                                   </div>
                                   <p class="w-full tracking-wider text-gray-300">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                        <a href="/products/product-01" class="text-red-400">...More</a>
                                   </p>
                                   <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                              </div>
                         </div>
                         <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                              <img src="{{ url('images/product_single_02.jpg') }}" alt="product-02" class="object-cover w-full h-[300px]">
                              <div class="p-8 leading-8">
                                   <div class="flex items-center justify-between">
                                        <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                        <span class="font-normal text-gray-300">24$</span>
                                   </div>
                                   <p class="w-full tracking-wider text-gray-300">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                        <a href="/products/product-02" class="text-red-400">...More</a>
                                   </p>
                                   <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                              </div>
                         </div>
                         <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                              <img src="{{ url('images/product_single_03.jpg') }}" alt="product-03" class="object-cover w-full h-[300px]">
                              <div class="p-8 leading-8">
                                   <div class="flex items-center justify-between">
                                        <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                        <span class="font-normal text-gray-300">24$</span>
                                   </div>
                                   <p class="w-full tracking-wider text-gray-300">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                        <a href="/products/product-03" class="text-red-400">...More</a>
                                   </p>
                                   <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
