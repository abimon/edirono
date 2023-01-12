<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function calendar(){
        $events=Event::all();
        $categories= Category::orderBy('subcategory','desc')->get();
        $data=[
            'events'=>$events,
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
}
