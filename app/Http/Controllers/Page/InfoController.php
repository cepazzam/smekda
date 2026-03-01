<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function read(String $slug){
            $list = DB::table('infos')->where('kategori','artikel')->where('slug','<>',$slug)->get();
           $artikel = DB::table('infos')->where('kategori','artikel')->first();
           return view('page.artikel.read', compact('artikel','list'));
    }

}
