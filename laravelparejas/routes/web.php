<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events',function(){
   $result = DB::select ('select idevent,eventname,description,date,place, hour,capacity,cost, s.name  from event e INNER JOIN state s ON e.idstate=s.id WHERE date>= CURDATE() ORDER BY idevent asc');
    $json=json_encode($result,true);

    $data=json_decode($json,true);

    return view("events.events",["data"=> $data]);
});

Route::get('/allevents',function(){
    $result = DB::select ('select idevent,eventname,description,date,place, hour,capacity,cost, s.name  from event e INNER JOIN state s ON e.idstate=s.id  ORDER BY idevent asc');
     $json=json_encode($result,true);
 
     $data=json_decode($json,true);
 
     return view("events.allevents",["data"=> $data]);
 });

Route::get('/registeredevents',function(){
    $name= Auth::user()->name ;
    $email= Auth::user()->email ;
    $idarray = DB::select ("select id from users u WHERE name='$name' and email='$email'");
    foreach ($idarray as $idone){
        $id= $idone->id;}
    $result = DB::select ("select idasistantsperevent,e.eventname,u.name,a.ticket,a.date,state,u.email  from asistantsperevent a INNER JOIN event e ON e.idevent=a.idevent INNER JOIN users u ON u.id=a.iduser WHERE a.iduser='$id' and state < 3 ORDER BY idasistantsperevent asc");
     $json=json_encode($result,true);
 
     $data=json_decode($json,true);
 
return view("registered.registered",["data"=> $data]);
 });

Route::get('/asistants',function(){
    $result = DB::select ('select idasistantsperevent,e.eventname,u.name,a.ticket,a.date,state,u.email  from asistantsperevent a INNER JOIN event e ON e.idstate=a.idevent INNER JOIN users u ON u.id=a.iduser ORDER BY idasistantsperevent asc');
     
     //$result = DB::table('event')->get()->toJson();
     //$event = array();
     /*foreach ($result as $events){
         $event[]= $events->eventname;
     }*/
     $json=json_encode($result,true);
 
     $data=json_decode($json,true);
 
     return view("asistants.asistants",["data"=> $data]);
 });

Route::get('/newevent','events@newevent');

Route::get('/eventinfo','events@eventinfo');

Route::get('/infoasistants/{id}','asistants@infoasistants');

Route::get('/eventsregistered/{id}/{state}','registered@eventsregistered');

Route::get('/cancelevent/{id}','registered@cancelevent');