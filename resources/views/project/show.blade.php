@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class=" py-15 border-b">
            <h1 class="text-6xl">
             {{ $project->title }}

            </h1>
           
        </div>
    </div>
   
    <div class="w-4/5 mx-auto pt-20">

        <span class="text-gray-500">

            By <span class="font-bold italic text-gray-800">
                {{ $project->user->name }}

            </span>, Created on {{ date('jS M Y', strtotime($project->updated_at)) }}
        </span>
<p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
    {{ $project->about }}

</p>

<iframe width="420" height="315"
src="{{ $project->video_path }}">
</iframe>

    </div>
@endsection
