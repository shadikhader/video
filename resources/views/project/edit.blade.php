@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class=" py-15 border-b">
            <h1 class="text-6xl">
                Update Project

            </h1>

        </div>
    </div>
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>

                @foreach ($errors->all() as $error )
                    <li class=" w-auto mb-4 text-gray-50 bg-red-500 rounded py-4  px-5">
                        {{ $error }}


                    </li>
                @endforeach
            </ul>

        </div>
    
        
    @endif
    <div class="w-4/5 mx-auto pt-20">

        <form action="/project/{{ $project->slug }}" 
               method="POST" 
                            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" 
                name="title"
                 
                value="{{ $project->title }}"
                class=" bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <textarea 
            name="about" 
           
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none" 
            >"{{ $project->about}}"</textarea>
  
    <button 
    type="submit"
    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl shadow"> 

Submit Project
    </button>
        </form>




    </div>
@endsection
