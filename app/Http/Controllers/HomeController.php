<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class HomeController extends Controller
{
    function index()
    {
        $data = [
            'portfolio' => Portfolio::where(['featured' => 1])->get()
        ];
        
        return view('index', $data);
    }
}
