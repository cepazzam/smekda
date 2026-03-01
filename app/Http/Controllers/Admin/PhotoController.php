<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Hash;
use Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $title ="Galeri Foto";
     $photos = Photo::latest()->paginate(5);
        return view('admin.page.galeri.index', compact('photos','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'caption' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/galeri','public');
        }

        $photo = Photo::create([
            'image' => $imagePath,
            'caption' => $request->input('caption')

        ]);
        //assign tags
        $photo->save();
     
            //redirect dengan pesan sukses
            return
                redirect()->route('photo.index')->with([
                    'info' => 'Data Berhasil Disimpan!'
                ]);
        

    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
           'caption' => 'required',
        ]);
        if ($request->hasFile('image') == "") {
            $photo = Photo::findOrFail($id);
            $photo->update([
                'caption' => $request->caption,
            ]);
        } else {
             $photo = Photo::findOrFail($id);
            if($photo->image==""){
                 $imagePath = $request->file('image')->store('img/galeri','public');
           
            $photo->update([
                'image' => $imagePath,
                'caption' => $request->caption
                
            ]);
             return redirect()->route('photo.index')->with('info', 'Photo Udated successfully');

        }
       
            
            $imagePath = public_path('storage/' . $photo->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('image')->store('img/galeri','public');
            $photo = Photo::findOrFail($id);
            $photo->update([
                'image' => $imagePath,
                'caption' => $request->caption,
                
            ]);
            
        }
        return redirect()->route('photo.index')->with('info', 'Photo galeri Udated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        
         $imagePath = public_path('storage/' . $photo->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $photo->delete();

        return redirect()->route('photo.index')->with('info', 'Image deleted successfully');
    }
}
