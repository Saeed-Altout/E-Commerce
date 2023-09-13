@extends('layout')
@section('title', 'Computers')

@section('content')
     <div class="container w-full px-10 mx-auto my-40">
          @if (count($computers) > 0)
               <ul class="flex flex-col gap-10 list-none">
                    @foreach ($computers as $computer)
                         <a class="px-5 py-3 duration-300 ease-in-out hover:bg-zinc-900" href="{{ route('computers.show', ['computer' => $computer['id']]) }}">
                              <li class="text-white ">
                                   <strong>
                                        {{ $computer['name'] }}
                                   </strong>
                                   from
                                   <strong>
                                        {{ $computer['country'] }}
                                   </strong>

                                   and price him is about:
                                   <strong>
                                        {{ $computer['price'] }}$
                                   </strong>
                              </li>
                         </a>
                    @endforeach
               </ul>
          @else
               <h1 class="text-white">Not Data To Show</h1>
          @endif
     </div>
@endsection
