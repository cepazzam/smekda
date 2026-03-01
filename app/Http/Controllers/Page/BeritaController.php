<?php

namespace App\Http\Controllers\Page;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function read(String $slug){
        $read = Post::where('slug',$slug)->first();
        $sambutan = DB::table('infos')->orderBy('id','desc')->where('kategori','sambutan')->first();
        $newslist = Post::where('slug','<>',$slug)->orderBy('id','desc')->limit(3)->get();

    return view('page.berita.read', compact('read','sambutan','newslist'));


    }
}
