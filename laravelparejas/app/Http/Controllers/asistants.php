<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asistants extends Controller
{
    public function asistants(){
        return view('asistants.asistants');
    }

    public function infoasistants($id){
        return view('asistants.infoasistants');
    }
}
