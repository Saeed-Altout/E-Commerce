@extends('layout')
@section('title', 'Cart')

@section('content')
     <div class="container w-full px-10 mx-auto my-28">
          <h class="text-4xl font-bold text-white">Cart</h>
          <div class="mt-5">
               <table class="w-full text-center">
                    <thead class="w-full">
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Id</th>
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Name</th>
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Image</th>
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Price</th>
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Description</th>
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Quantity</th>
                         <th class="py-3 px-3 border-b-2 border-b-gray-800 text-white">Delete</th>
                    </thead>
                    <tbody class="w-full text-white">
                         <tr class="py-5">
                              <td class="px-3">01</td>
                              <td class="px-3">Lump</td>
                              <td class="px-3">
                                   <img src="{{ url('images/feature_prod_01.jpg') }}" alt="product-01" class="w-full h-full max-h-32 object-contain">
                              </td>

                              <td class="pc-3">
                                   <p class="line-clamp-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel mollitia iure impedit aspernatur optio culpa, nobis consectetur?</p>
                              </td>
                              <td class="px-3">
                                   <button class="bg-red-500 text-white px-2 py-0.5 hover:bg-red-600 duration-200 ease-linear rounded-lg">
                                        -
                                   </button>
                                   <p class="font-semibold inline-block mx-1">4</p>
                                   <button class="bg-green-500 text-white px-2 py-0.5 hover:bg-green-600 duration-200 ease-linear rounded-lg">
                                        +
                                   </button>
                              </td>
                              <td class="px-3">200$</td>
                              <td class="px-3">
                                   <button class="bg-red-500 text-white px-3 py-1 hover:bg-red-600 duration-200 ease-linear rounded-lg">
                                        Delete
                                   </button>
                              </td>
                         </tr>
                         <tr class="py-5">
                              <td class="px-3">02</td>
                              <td class="px-3">Camera</td>
                              <td class="px-3">
                                   <img src="{{ url('images/feature_prod_03.jpg') }}" alt="product-02" class="w-full h-full max-h-32 object-contain">
                              </td>

                              <td class="pc-3">
                                   <p class="line-clamp-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel mollitia iure.</p>
                              </td>
                              <td class="px-3">
                                   <button class="bg-red-500 text-white px-2 py-0.5 hover:bg-red-600 duration-200 ease-linear rounded-lg">
                                        -
                                   </button>
                                   <p class="font-semibold inline-block mx-1">12</p>
                                   <button class="bg-green-500 text-white px-2 py-0.5 hover:bg-green-600 duration-200 ease-linear rounded-lg">
                                        +
                                   </button>
                              </td>
                              <td class="px-3">800$</td>
                              <td class="px-3">
                                   <button class="bg-red-500 text-white px-3 py-1 hover:bg-red-600 duration-200 ease-linear rounded-lg">
                                        Delete
                                   </button>
                              </td>
                         </tr>
                    </tbody>
                    <thead class="w-full">
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white">2</th>
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white"></th>
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white"></th>
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white"></th>
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white"></th>
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white">1400$</th>
                         <th class="py-3 px-3 border-t-2 border-t-gray-800 text-white"></th>
                    </thead>
               </table>
          </div>
     </div>

@endsection
