<?php

namespace App\Http\Controllers\Page;
use App\Models\Info;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index(){
        $profil=Info::where('kategori','profil')->orderBy('id','asc')->first();
        $list=Info::where('kategori','profil')->orderBy('id','desc')->get();

        return view('page.profil.index', compact('profil','list'));

        
    }
    public function read(String $slug){
        $profil=Info::where('kategori','profil')->where('slug',$slug)->first();
        $list=Info::where('kategori','profil')->orderBy('id','desc')->get();

        return view('page.profil.read', compact('profil','list'));

        
    }
}
