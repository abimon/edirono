<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\File;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class dataController extends Controller
{
    public function addCategory()
    {
        Category::create([
            'category' => request()->category,
            'subcategory' => request()->sub_category
        ]);
        return redirect()->back();
    }
    public function createproject($category)
    {
        //get just ext
        $extension = request()->file('file')->getClientOriginalExtension();
        //file name only
        $filename = request()->title;
        //File name to store
        $file_path = $filename . '_' . time() . '.' . $extension;
        
        Project::create([
            'title' => request()->title,
            'category' => $category,
            'subcategory'=>request()->category_id,
            'description' => request()->description,
            'file_path' => $file_path,
            'isOngoing' => request()->isOngoing,
            'project_location' => request()->location,
        ]);
        //upload
        request()->file('file')->storeAs('public/projects', $file_path);
        
        return redirect()->back();
    }
    public function addFiles(Request $req)
    {
        foreach ($req->file('files') as $file) {
            $filename = $file->getClientOriginalName();
            $file->move('storage/projects/others', $filename);;
            File::create([
                'project_id' => request()->project_id,
                'file_path' => $filename
            ]);
        }
        return redirect()->back();
    }
    public function createEvent()
    {
        Event::create([
            'event_title' => request()->event_title,
            'event_date' => request()->event_date,
            'event_time' => request()->event_time,
            'event_duration' => request()->event_duration,
            'event_desc' => request()->event_description,
        ]);
        return redirect()->back();
    }
    function deleteEvent($id)
    {
        Event::destroy($id);
        return redirect()->back();
    }
    function reg_user(){
        $user=User::create([
            'name' => request()->post('name'),
            'email' => request()->post('email'),
            'password' => Hash::make(request()->post('password')),
            'permissions'=>'Guest',
        ]);
        if($user){
            return response()->json([
                'success'=>true,
            ]);
        }
        else{
            return response()->json([
                'success'=>false,
            ]);
        }
        return response()->json(

        );
    }
    
}
