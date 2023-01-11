<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function calendar(){
        $events=Event::all();
        $data=[
            'events'=>$events,
        ];
        return view('calendar', $data);
    }
}
