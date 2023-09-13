@extends('layout')
@section('title', 'Products')

@section('content')
     <div class="container w-full px-10 mx-auto my-40">
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
                                   <a href="/" class="text-red-400">...More</a>
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
                                   <a href="/" class="text-red-400">...More</a>
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
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_04.jpg') }}" alt="product-04" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_05.jpg') }}" alt="product-05" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_06.jpg') }}" alt="product-06" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_07.jpg') }}" alt="product-07" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_08.jpg') }}" alt="product-08" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_09.jpg') }}" alt="product-09" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <img src="{{ url('images/product_single_10.jpg') }}" alt="product-10" class="object-cover w-full h-[300px]">
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">Product</h4>
                                   <span class="font-normal text-gray-300">24$</span>
                              </div>
                              <p class="w-full tracking-wider text-gray-300">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit!
                                   <a href="/" class="text-red-400">...More</a>
                              </p>
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Buy Now</button>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
