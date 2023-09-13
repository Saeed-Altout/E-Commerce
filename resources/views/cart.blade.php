@extends('layout')
@section('title', 'Cart')

@section('content')
     <div class="container w-full px-10 mx-auto my-40">
          <h1 class="text-4xl font-bold text-white">Cart</h1>

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
                         <tr>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">01</td>
                              <td class="px-2 py-4 font-semibold text-white w-28 h-28 file:text-base"><img class="object-contain w-full h-full" src="{{ url('images/product_single_01.jpg') }}" alt="product-01"></td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Product-01</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">24$</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eligendi placeat ipsam.</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-red-500 rounded-lg hover:bg-red-600 w-fit" id="deleteBun">Delete</button>
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-green-500 rounded-lg hover:bg-green-600 w-fit" id="addBtn">Add</button>
                              </td>
                         </tr>
                         <tr>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">02</td>
                              <td class="px-2 py-4 font-semibold text-white w-28 h-28 file:text-base"><img class="object-contain w-full h-full" src="{{ url('images/product_single_02.jpg') }}" alt="product-02"></td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Product-02</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">24$</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eligendi placeat ipsam.</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-red-500 rounded-lg hover:bg-red-600 w-fit" id="deleteBun">Delete</button>
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-green-500 rounded-lg hover:bg-green-600 w-fit" id="addBtn">Add</button>
                              </td>
                         </tr>
                         <tr>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">03</td>
                              <td class="px-2 py-4 font-semibold text-white w-28 h-28 file:text-base"><img class="object-contain w-full h-full" src="{{ url('images/product_single_03.jpg') }}" alt="product-03"></td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Product-03</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">24$</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eligendi placeat ipsam.</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-red-500 rounded-lg hover:bg-red-600 w-fit" id="deleteBun">Delete</button>
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-green-500 rounded-lg hover:bg-green-600 w-fit" id="addBtn">Add</button>
                              </td>
                         </tr>
                         <tr>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">04</td>
                              <td class="px-2 py-4 font-semibold text-white w-28 h-28 file:text-base"><img class="object-contain w-full h-full" src="{{ url('images/product_single_04.jpg') }}" alt="product-04"></td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Product-04</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">24$</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eligendi placeat ipsam.</td>
                              <td class="px-2 py-4 font-semibold text-white file:text-base">
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-red-500 rounded-lg hover:bg-red-600 w-fit" id="deleteBun">Delete</button>
                                   <button class="block px-4 py-2 mx-auto my-2 duration-300 ease-in-out bg-green-500 rounded-lg hover:bg-green-600 w-fit" id="addBtn">Add</button>
                              </td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </div>
@endsection
