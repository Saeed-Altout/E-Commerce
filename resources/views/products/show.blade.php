@extends('layout')
@section('title', 'Show')

@section('content')
     <div class="container w-full px-10 mx-auto my-28">
          <div class="max-w-lg mx-auto">
               <div class="overflow-hidden duration-300 ease-in-out ">
                    <img src="{{ url($product->imgUrl) }}" alt="product-01" class="object-cover rounded-lg w-full h-[400px]">
                    <div class="p-8 leading-8">
                         <div class="flex items-center justify-between">
                              <h4 class="text-2xl font-semibold tracking-wider text-white">{{ $product->name }}</h4>
                              <span class="font-normal text-gray-300">{{ $product->price }}</span>
                         </div>
                         <p class="w-full tracking-wider text-gray-300">
                              {{ $product->description }}
                         </p>
                         <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="block px-4 py-1 mt-10 ml-auto font-semibold text-white duration-300 ease-in-out bg-red-500 rounded-lg w-fit hover:bg-red-600">Delete</button>
                         </form>
                    </div>
               </div>
          </div>
          <a href="{{ route('products.index') }}">
               <button class="block px-4 py-2 my-5 ml-auto text-black duration-300 ease-in-out bg-white rounded-lg w-fit">Back</button>
          </a>
     </div>
@endsection
