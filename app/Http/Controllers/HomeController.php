<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Supprot\Str;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        $slideractive = DB::table('posts')->orderBy('id','asc')->where('position','slider')->first();
        $slider = DB::table('posts')->orderBy('id','asc')->skip(1)->where('position','slider')->limit(5)->get();
        $newslist = DB::table('posts')->where('position','latest')->limit(4)->get();
        $sambutan = DB::table('infos')->orderBy('id','desc')->where('kategori','sambutan')->first();
        $artikel = DB::table('infos')->where('kategori','artikel')->first();
        $utama = DB::table('posts')->where('position','headline')->first();
        $galeri = DB::table('photos')->limit(3)->get();
        $yt = DB::table('videos')->first();
        $harian = DB::table('widgets')->where('kategori','agenda')->first();
        $quote = DB::table('widgets')->where('kategori','quotes')->first();
        $skl = DB::table('sekolahs')->orderBy('id','desc')->first();


        return view('home', compact(
            'skl','sambutan','slider','slideractive','utama','newslist','galeri','yt','artikel','harian','quote'
            ));
    }

}
