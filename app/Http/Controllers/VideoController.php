<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show()
    {
        return view('video.video'); // Ensure this view file exists at resources/views/video/video.blade.php
    }
}
