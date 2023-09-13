@extends('layout')
@section('title', 'Computer')

@section('content')
     <div class="container w-full px-10 mx-auto my-40">
          <ul>
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
          </ul>
          <div class="py-4">
               <a href="{{ route('computers.edit', $computer->id) }}">
                    <button type="submit" class="block px-5 py-3 ml-auto text-base text-white bg-yellow-500 rounded-md cursor-pointer w-fit ">
                         Edit
                    </button>
               </a>

               <form action="{{ route('computers.destroy', $computer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="">
                         <button type="submit" class="block px-5 py-3 ml-auto text-base text-white bg-red-500 rounded-md cursor-pointer w-fit ">
                              Delete
                         </button>
                    </a>
               </form>
          </div>


     </div>
@endsection
