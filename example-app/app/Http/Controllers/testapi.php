<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testapi extends Controller
{
    //
    function getData()
    {
        return ["name"=>"Emon"];
    }
}
