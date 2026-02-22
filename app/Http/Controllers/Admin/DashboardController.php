<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        $title ='Dashboard';
        $skl = Sekolah::first();
        return view('admin.page.dashboard', compact('title','skl'));
    }
}
