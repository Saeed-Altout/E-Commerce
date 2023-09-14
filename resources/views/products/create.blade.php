@extends('layout')
@section('title', 'Create')

@section('content')
     <div class="container w-full px-10 mx-auto my-28">
          <h1 class="text-4xl font-bold text-white">Create</h1>

          <div class="mt-5">
               <form action="{{ route('products.store') }}" method="POST" class="max-w-md mx-auto">
                    @csrf

                    <div class="w-full my-3">
                         <label for="product-name" class="block mb-3 text-lg text-white">name</label>
                         <input type="text" name="product-name" id="product-name" class="block w-full px-6 py-3 text-lg text-white rounded-md appearance-none bg-zinc-800 focus:outline-none">
                    </div>
                    <div class="w-full my-3">
                         <label for="product-description" class="block mb-3 text-lg text-white">description</label>
                         <input type="text" name="product-description" id="product-description" class="block w-full px-6 py-3 text-lg text-white rounded-md appearance-none bg-zinc-800 focus:outline-none">
                    </div>
                    <div class="w-full my-3">
                         <label for="product-price" class="block mb-3 text-lg text-white">price</label>
                         <input type="text" name="product-price" id="product-price" class="block w-full px-6 py-3 text-lg text-white rounded-md appearance-none bg-zinc-800 focus:outline-none">
                    </div>
                    <div class="w-full my-3">
                         <label for="product-imgUrl" class="block mb-3 text-lg text-white">imgUrl</label>
                         <input type="text" name="product-imgUrl" id="product-imgUrl" class="block w-full px-6 py-3 text-lg text-white rounded-md appearance-none bg-zinc-800 focus:outline-none">
                    </div>
                    <div class="w-full my-3">
                         <button type="submit" class="block px-6 py-3 ml-auto text-lg text-white bg-green-500 rounded-md">Save</button>
                    </div>
               </form>
          </div>
          <a href="{{ route('products.index') }}">
               <button class="block px-4 py-2 my-5 ml-auto text-black duration-300 ease-in-out bg-white rounded-lg w-fit">Back</button>
          </a>
     </div>
@endsection
