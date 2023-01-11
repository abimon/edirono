<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function createproject(){
        Project::create([
            'title'=>request()->title,
            'category_id'=>request()->category_id,
            'description'=>request()->description,
            'file_path'=>request()->file_path,
            'isOngoing'=>request()->isOngoing,
            'project_location'=>request()->project_location,
        ]);
        return redirect()->back();
    }
    function addFiles(){
        
    }
    public function createEvent(){
        Event::create([
            'event_title'=>request()->event_title,
            'event_date'=>request()->event_date,
            'event_time'=>request()-> event_time,
            'event_duration'=>request()-> event_duration,
            'event_desc'=>request()-> event_desc,
        ]);
        return redirect()->back();
    }
    function deleteEvent($id){
        Event::destroy($id);
        return redirect()->back();
    }
    
}
