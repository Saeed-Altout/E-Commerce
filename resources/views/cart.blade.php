@extends('layout')
@section('title', 'Cart')

@section('content')
     <div class="container w-full px-10 mx-auto my-28">
          <h class="text-4xl font-bold text-white">Cart</h>
          <div class="mt-5">
               <table class="w-full text-center">
                    <thead class="w-full">
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Id</th>
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Name</th>
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Image</th>
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Price</th>
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Description</th>
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Quantity</th>
                         <th class="px-3 py-3 text-white border-b-2 border-b-gray-800">Delete</th>
                    </thead>
                    <tbody class="w-full text-white">


                         @php $i = 0; @endphp

                         @if ($selected_item == !null)
                              <ul>

                                   @foreach ($Products as $Product)
                                        <tr class="py-5">
                                             <td class="px-3">{{ ++$i }}</td>
                                             <td class="px-3">{{ $Product->name }}</td>
                                             <td class="px-3">
                                                  <img src="{{ $Product->imgUrl }}" alt="product-01" class="object-cover w-40 h-40 mx-auto max-h-32">
                                             </td>

                                             <td class="text-left pc-3">
                                                  <p class="line-clamp-1">{{ $Product->price }}</p>
                                             </td>
                                             @php $x = 1; @endphp
                                             <td class="px-3">
                                                  <button class="bg-red-500 text-white px-2 py-0.5 hover:bg-red-600 duration-200 ease-linear rounded-lg">
                                                       -
                                                  </button>
                                                  <p class="inline-block mx-1 font-semibold">{{ $x }}</p>
                                                  <button class="bg-green-500 text-white px-2 py-0.5 hover:bg-green-600 duration-200 ease-linear rounded-lg">
                                                       +
                                                  </button>
                                             </td>
                                             <td class="px-3">{{ $x * $Product->price }}</td>
                                             <td class="px-3">
                                                  <button class="block px-4 py-1 mt-10 ml-auto font-semibold text-white duration-300 ease-in-out bg-red-500 rounded-lg w-fit hover:bg-red-600">Delete</button>
                                             </td>
                                        </tr>
                                   @endforeach


                              </ul>
                         @else
                              <p>it is empty</p>
                         @endif


                    </tbody>
                    <thead class="w-full">
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800">2</th>
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800"></th>
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800"></th>
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800"></th>
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800"></th>
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800">1400$</th>
                         <th class="px-3 py-3 text-white border-t-2 border-t-gray-800"></th>
                    </thead>
               </table>
          </div>
     </div>

@endsection
