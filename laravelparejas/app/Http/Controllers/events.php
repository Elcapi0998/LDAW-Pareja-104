<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class events extends Controller
{
    

    public function events(){
        return view('events.events');
    }

    public function newevent(){
        return view('events.newevent');
    }


    public function eventinfo(){
        return view('events.eventinfo');
    }

    public function getallevents(){
       // $result = DB::select ('select* from events');
        /*foreach ($result as $event){
            return $event->eventname;
        }*/
        $posts = DB::table('posts')->get();
        return $posts;
    }

}
