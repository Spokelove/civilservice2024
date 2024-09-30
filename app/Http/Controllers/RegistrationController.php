<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   
    public function index ()
  {
         return view ('Registration.index');
    }

    public function create(){


      return view ('Registration.create');
    }

    public function store(Request $Request){
      return view ('Registration.store');

    }

     
    }


