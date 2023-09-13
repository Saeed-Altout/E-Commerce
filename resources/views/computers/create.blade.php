@extends('layout')
@section('title', 'Create')

@section('content')
     <div class="container w-full px-10 mx-auto my-40">
          <h1 class="text-4xl font-bold text-white">Create</h1>

          <div class="max-w-4xl mx-auto mt-20">
               <form action="{{ route('computers.store') }}" method="post">
                    @csrf
                    <div class="py-4">
                         <label for="computer-name" class="block mb-2 text-2xl text-zinc-100">
                              Name
                         </label>
                         <input type="text" value="{{ old('computer-name') }}" name="computer-name" id="computer-name" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
                         @error('computer-name')
                              <p class="text-red-400"> {{ $message }}</p>
                         @enderror
                    </div>
                    <div class="py-4">
                         <label for="computer-country" class="block mb-2 text-2xl text-zinc-100">
                              Country
                         </label>
                         <input type="text" value="{{ old('computer-country') }}" name="computer-country" id="computer-country" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
                         @error('computer-country')
                              <p class="text-red-400"> {{ $message }}</p>
                         @enderror
                    </div>
                    <div class="py-4">
                         <label for="computer-price" class="block mb-2 text-2xl text-zinc-100">
                              Price
                         </label>
                         <input type="text" value="{{ old('computer-price') }}" name="computer-price" id="computer-price" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
                         @error('computer-price')
                              <p class="text-red-400"> {{ $message }}</p>
                         @enderror
                    </div>
                    <div class="py-4">
                         <button type="submit" class="block px-5 py-3 ml-auto text-base text-white bg-green-500 rounded-md cursor-pointer w-fit ">
                              Save
                         </button>
                    </div>
               </form>



          </div>
     </div>
@endsection


{{-- 
<form action="" method="post">
     <div class="py-4">
          <label for="title" class="block mb-2 text-2xl text-zinc-100">
               Title
          </label>
          <input type="text" name="title" id="" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
     </div>
     <div class="py-4">
          <label for="image" class="block mb-2 text-2xl text-zinc-100">
               Image
          </label>
          <input type="text" name="image" id="" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
     </div>
     <div class="py-4">
          <label for="description" class="block mb-2 text-2xl text-zinc-100">
               Description
          </label>
          <input type="text" name="description" id="" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
     </div>
     <div class="py-4">
          <label for="price" class="block mb-2 text-2xl text-zinc-100">
               Price
          </label>
          <input type="text" name="price" id="" placeholder=" " class="block w-full px-5 py-3 text-base text-white rounded-md appearance-none bg-zinc-900 focus:outline-none ">
     </div>
     <div class="py-4">
          <input type="submit" value="Save" class="block px-5 py-3 ml-auto text-base text-white bg-green-500 rounded-md cursor-pointer w-fit ">
     </div>
</form> --}}
