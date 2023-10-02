@extends('layout')
@section('title', 'Products')

@section('content')
     <div class="container w-full px-10 mx-auto my-28">
          <h1 class="text-4xl font-bold text-white">Products</h1>
          <a href="{{ route('products.create') }}">
               <button class="block px-4 py-2 my-10 mr-auto text-white duration-300 ease-in-out rounded-lg bg-sky-500 hover:bg-sky-600 w-fit">Create</button>
          </a>
          <div class="grid grid-flow-row grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
               @foreach ($products as $product)
                    <div class="overflow-hidden duration-300 ease-in-out rounded-lg shadow-lg hover:scale-105 bg-zinc-900">
                         <a href="{{ route('products.show', $product->id) }}">
                              <img src="{{ url($product->imgUrl) }}" alt="{{ $product->name }}" class="object-cover w-full h-[300px]">
                         </a>
                         <div class="p-8 leading-8">
                              <div class="flex items-center justify-between">
                                   <h4 class="text-2xl font-semibold tracking-wider text-white">{{ $product->name }}</h4>
                                   <span class="font-normal text-gray-300">{{ $product->price }}</span>
                              </div>
                              <div>
                                   <p class="w-full tracking-wider text-gray-300 truncate">
                                        {{ $product->description }}
                                   </p>
                                   <a href="{{ route('products.show', $product->id) }}" class="w-full tracking-wider text-red-500">See More</a>
                              </div>

                              <a href="{{ route('products.edit', $product->id) }}">
                                   <button class="block px-6 py-2 mt-10 ml-auto text-white duration-300 ease-in-out rounded-lg bg-sky-500 hover:bg-sky-600 w-fit">Edit</button>
                              </a>

                         </div>
                    </div>
               @endforeach
          </div>
     </div>
@endsection


{{--
<div class="mt-10 bg-zinc-900">
     <table class="w-full">
          <thead class="w-full text-left border-b-[1px] bg-zinc-950 border-b-zinc-500">
               <tr class="w-full">
                    <th class="px-2 py-4 font-semibold text-white file:text-base">No.</th>
                    <th class="px-2 py-4 font-semibold text-center text-white file:text-base">Image</th>
                    <th class="px-2 py-4 font-semibold text-white file:text-base">Title</th>
                    <th class="px-2 py-4 font-semibold text-white file:text-base">Price</th>
                    <th class="px-2 py-4 font-semibold text-white file:text-base">Description</th>
                    <th class="px-2 py-4 font-semibold text-center text-white file:text-base">Actions</th>
               </tr>
          </thead>
          <tbody class="text-left">
               @foreach ($products as $product)
                    <tr>
                         <td class="px-2 py-4 font-semibold text-white file:text-base">{{ $product->id }}</td>
                         <td class="px-2 py-4 font-semibold text-white w-28 h-28 file:text-base"><img class="object-contain w-full h-full" src="{{ $product->imgUrl }}" alt={{ $product->name }}></td>
                         <td class="px-2 py-4 font-semibold text-white file:text-base">{{ $product->name }}</td>
                         <td class="px-2 py-4 font-semibold text-white file:text-base">{{ $product->price }}</td>
                         <td class="px-2 py-4 font-semibold text-white file:text-base">{{ $product->description }}</td>
                         <td class="px-2 py-4 font-semibold text-white file:text-base">
                              {{-- <form action="{{ route('products.destroy'), $product->id }}" method="POST">
                                   @csrf
                                   @method('DELETE')
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-red-500 rounded-lg hover:bg-red-500 w-fit">Delete</button>
                              </form> --}}
{{-- <a href="{{ route('products.edit', $product->id) }}">
     <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-yellow-500 rounded-lg hover:bg-yellow-600 w-fit">Edit</button>
</a>
<a href="{{ route('products.show', $product->id) }}">
     <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out rounded-lg bg-sky-500 hover:bg-sky-600 w-fit">Show</button>
</a>
</td>
</tr>
@endforeach
</tbody>
</table>

</div> --}} --}}

{{--
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
     @csrf
     @method('DELETE')
     <button class="block px-4 py-1 mt-10 ml-auto font-semibold bg-white rounded-lg w-fit">Delete</button>
</form> --}}
