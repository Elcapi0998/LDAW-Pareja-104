<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registered extends Controller
{
    public function registered(){
        return view('registered.registered');
    }

    public function eventsregistered($id,$state){
        
        $temp=array('id' => $id,'state' => $state);
        $json=json_encode($temp,JSON_FORCE_OBJECT);
        $data=json_decode($json);
        /*foreach ($json as $event){
            return $event;
        }*/
        return view("registered.eventsregistered",["data"=> $json]);
        //var_dump($json);
      //return $data->state;
    }

    public function cancelevent($id){
        //DB::statement ("update asistantsperevent set state=3 where id='$id' ");
        \DB::table('asistantsperevent')->where('idasistantsperevent',$id)->update(array('state' => 3,));
        return view('registered.cancelevent');
    }
    
}
