<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProjectController extends Controller
{

    public function __construct(){
$this->middleware('auth', ['except'=>['index','show']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $project = Project::all();
        // dd($project);
    return view('/project.index')
    ->with('projects', Project::orderBy('updated_at', 'DESC')->get());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'about'=> 'required',
            'image'=> 'required | mimes:jpg,png,jpeg | max:5048'

        ]);
        $newImageName = uniqid() . '-' . time() . '.'. $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        $videopath = 'https://www.youtube.com/watch?v=LqYKkryaPDw';

     
        Project::create([
            'type'=>'drama',
            'slug'=>SlugService::createSlug(Project::class, 'slug',$request->title),
            'title'=>$request->input('title'),
            'about'=>$request->input('about'),  
            'image_path'=>$newImageName,
            'video_path'=> $videopath ,
            'user_id'=> auth()->user()->id
        ]);
        return redirect('/project')->with('message' , 'your post been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    // public function show(Project $project)
    public function show( $slug)
    {
        return view('project.show')
        ->with('project',Project::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    // public function edit(Project $project)
    public function edit($slug)
    {
        return view('project.edit')
            ->with('project',Project::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        $request->validate([
            'title'=>'required',
            'about'=> 'required',
          

        ]);
        Project::where('slug', $slug)
       ->update([

        'type'=>'drama',
        'slug'=>SlugService::createSlug(Project::class, 'slug',$request->title),
        'title'=>$request->input('title'),
        'about'=>$request->input('about'),  
        // 'image_path'=>$newImageName,
        // 'video_path'=> $videopath ,
        'user_id'=> auth()->user()->id
      ] );
       return redirect('/project')
       ->with('message','Your project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $project = Project::where('slug', $slug);
        $project->delete();
        return redirect('/project')
        ->with('message','Your project has been Deleted');
    }
}
