<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistanceController extends Controller
{
    public function index ()
    {
         return view ('Assistance.Assistance');
    }

}
