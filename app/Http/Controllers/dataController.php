<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function addCategory()
    {
        Category::create([
            'category'=>request()->category,
            'subcategory'=>request()->sub_category
        ]);
        return redirect()->back();
    }
    public function createproject()
    {
        //get just ext
        $extension = request()->file('file')->getClientOriginalExtension();
        //file name only
        $filename = request()->title;
        //File name to store
        $file_path = $filename . '_' . time() . '.' . $extension;
        //upload
        request()->file('file')->storeAs('public/projects', $file_path);
        Project::create([
            'title' => request()->title,
            'category_id' => request()->category_id,
            'description' => request()->description,
            'file_path' => $file_path,
            'isOngoing' => request()->isOngoing,
            'project_location' => request()->location,
        ]);
        return redirect()->back();
    }
    function addFiles()
    {
    }
    public function createEvent()
    {
        Event::create([
            'event_title' => request()->event_title,
            'event_date' => request()->event_date,
            'event_time' => request()->event_time,
            'event_duration' => request()->event_duration,
            'event_desc' => request()->event_desc,
        ]);
        return redirect()->back();
    }
    function deleteEvent($id)
    {
        Event::destroy($id);
        return redirect()->back();
    }
}
