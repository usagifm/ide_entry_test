<?php

namespace App\Http\Controllers;
use App\Models\School;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function getInauguratedSchool(){

    $data =  School::select('id', 'school_name' ,"inaugurated_date" )->get();
    return response()->json($data, 200);

    }


}
