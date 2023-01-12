<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\File;
use App\Models\Project;
use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function calendar(){
        $events=Event::all();
        $projects=Project::all();
        $categories= Category::orderBy('subcategory','desc')->get();
        $data=[
            'events'=>$events,
            'projects'=>$projects,
            'categories'=>$categories
        ];
        return view('calendar', $data);
    }
    public function dashboard(){
        $projects=Project::all();
        $categories= Category::orderBy('subcategory','desc')->get();
        
        $data=[
            'projects'=>$projects,
            'categories'=>$categories
        ];
        return view('dashboard', $data);
    }
    function home(){
        $projects=Project::all();
        $data=[
            'projects'=>$projects,
        ];
        return view('home', $data);
    }
    function project($name){
        $project=Project::where(['title'=>$name])->first();
        $category=Category::where(['id'=>$project->category_id])->first();
        $files=File::where(['project_id'=>$project->id])->get();
        $data=[
            'files'=>$files,
            'project'=>$project,
            'category'=>$category,
        ];
        //return $project;
        return view('single', $data);
    }
    function knits(){
        $projects=Project::where(['category'=>'Knits'])->get();
        $data=[
            'projects'=>$projects,
        ];
        return view('projects', $data);
    }
    function archs(){
        $projects=Project::where(['category'=>'Archs'])->get();
        $data=[
            'projects'=>$projects,
        ];
        return view('projects', $data);
    }
}
