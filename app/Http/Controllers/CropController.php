<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class CropController extends Controller
{
    public function index()
    {
        return view('crop.index');
    }
}
