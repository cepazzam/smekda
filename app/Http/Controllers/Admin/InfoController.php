<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Storage;
use App\Models\Info;
use Hash;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(String $kategori)
    {
        //

        $infos = Info::where('kategori',$kategori)->paginate(5);
        $title = "List informasi ";
        return view('admin.page.info.index', compact('title', 'infos','kategori'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $kategori)
    {
        //
        $title = "Create infos";
        return view('admin.page.info.create', compact('title','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/info','public');
        }

        $info = Info::create([
            'image' => $imagePath,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'), '-'),
            'kategori' => $request->input('kategori'),
            'content' => $request->input('content')

        ]);
        //assign tags
        $info->save();
     
            //redirect dengan pesan sukses
            return
                redirect()->route('list-info',$request->kategori)->with([
                    'info' => 'Data Berhasil Disimpan!'
                ]);
        

    }
    /**
     * Display the specified resource.
     */
    public function show(Info $info)
    {
        $title = "detail info"; 
        return view('admin.page.info.show', compact('info','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Info $info)
    {
        $title = "Edit";
        return view('admin.page.info.edit', compact(
            'info',
            'title'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Info $info)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);
        $imagePath = null;
        if ($request->hasFile('image') == "") {
            $info = Info::findOrFail($info->id);
            $info->update([
                'title' => $request->input('title'),
                'kategori' => $request->input('kategori'),
                'content' => $request->input('content'),
                'slug' => Str::slug($request->input('title'), '-')

            ]);
        } else {
             $info = Info::findOrFail($info->id);
            if($info->image==""){
                 $imagePath = $request->file('image')->store('img/info','public');
           
            $info->update([
                'image' => $imagePath,
                'title' => $request->title,
                'kategori' => $request->kategori,
                'content' => $request->content,
                'slug' => Str::slug($request->input('title'), '-'),

                
            ]);
             return redirect()->route('list-info',$info->kategori)->with('info', 'Updated Info successfully');

        }
       
            
            $imagePath = public_path('storage/' . $info->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('image')->store('img/info','public');
            $info = Info::findOrFail($info->id);
            $info->update([
                'image' => $imagePath,
                'title' => $request->title,
                'kategori' => $request->input('kategori'),
                'content' => $request->content,
                'slug' => Str::slug($request->input('title'), '-')

                
            ]);
            
        }
        return redirect()->route('list-info',$info->kategori)->with('info', 'Updated Info successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(info $info)
    {
  
        $imagePath = public_path('storage/' . $info->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
            
        }
        $info->delete();
        return redirect()->back()->with('success', 'Image deleted successfully');
        if (file_exists($imagePath)) {
            unlink($imagePath);
            
        }
        $info->delete();

        

        return redirect()->back()->with('success', 'Image deleted successfully');
    }

}