<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class HomeController extends Controller
{
    public function index(){
        $skl = Sekolah::first();
        return view('home', compact('skl'));
    }
}
