<?php

namespace App\Http\Controllers;

use App\Models\CameraDaily;
use App\Models\HarwatDaily;
use Illuminate\Http\Request;

class CameraDailyController extends Controller
{
    public function index()
    {
        return view('harwat-daily', [
            "title" => "Harwat Daily",
            "camera_dailies" => CameraDaily::all()
        ]);
    }
    
    public function show(CameraDaily $cameraDaily)
    {
        return view('camera-daily-detail', [
            "title" => "Camera Daily Detail",
            "camera_dailies" => $cameraDaily,
        ]);
    }
}
