<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;
use illuminate\Support\Facades\Storage;


class SekolahController extends Controller
{
    public function dataskl(){
        $skl = Sekolah::first();
        $title ="Data Sekolah";
        return view('admin.page.setting.sekolah', compact('skl','title'));
    }


     public function update(Request $request, String $id){
        $request->validate([
            'nm_skl'=>'required',
        ]);
         $skl = Sekolah::where('id',$id)->first();
         $skl->update([
               
                'nm_skl'=> $request->nm_skl,
                'alamat'=>$request->alamat,
                'pos'=>$request->pos,
                'npsn'=>$request->npsn,
                'telp_fax'=>$request->telp_fax,
                'email'=>$request->email,
                'website'=>$request->website,
                'kepsek'=>$request->kepsek,
                'nip'=>$request->nip,
                'tagline'=>$request->tagline
                
            ]);
        return redirect()->route('data-sekolah')->with('info','data sekolah berhasil diupdate');
     }

    public function logo(Request $request, String $id)
    {
         $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
         if ($request->hasFile('logo') == "") {
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logo' => null,
                
            ]);
        } else {
            $skl = Sekolah::where('id',$id)->first();
            if($skl->logo==""){
                 $imagePath = $request->file('logo')->store('img/sekolah','public');
           
            $skl->update([
                'logo' => $imagePath,
                               
            ]);
             return redirect()->route('data-sekolah')->with('info', 'Posted Udated successfully');

        }
        $skl = Sekolah::where('id',$id)->first();
        $imagePath = public_path('storage/' . $skl->logo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('logo')->store('img/sekolah','public');
            $skl = Sekolah::where('id',$id)->first();
            $skl->update([
                'logo' => $imagePath,
                               
            ]);
      
            }  

        return redirect()->route('data-sekolah')->with('info','Logo updated successfully');
    }
}