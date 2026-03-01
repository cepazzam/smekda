<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
    $agenda=Agenda::orderBy('id','desc')->first();
    $harian = DB::table('widgets')->where('kategori','agenda')->first();
    return view('page.agenda.index', compact('harian','agenda'));
    }
}
