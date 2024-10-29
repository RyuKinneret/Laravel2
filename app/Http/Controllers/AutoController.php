<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index_GET()
    {
        $baraja = Auto::all(); 
        return view('auto.auto', compact('baraja')); 
    }
}
