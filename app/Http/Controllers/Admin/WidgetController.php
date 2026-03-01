<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Widget;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use Storage;

class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $title ="Widget";
        $widgets = Widget::latest()->paginate(5);
        return view('admin.page.widget.index', compact('widgets','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'kategori' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/widget','public');
        }

        $widget = Widget::create([
            'image' => $imagePath,
            'kategori' => $request->input('kategori')

        ]);
        //assign tags
        $widget->save();
     
            //redirect dengan pesan sukses
            return
                redirect()->route('widget.index')->with([
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
           'kategori' => 'required',
        ]);
        if ($request->hasFile('image') == "") {
            $widget = Widget::findOrFail($id);
            $widget->update([
                'kategori' => $request->kategori,
            ]);
        } else {
             $widget = Widget::findOrFail($id);
            if($widget->image==""){
                 $imagePath = $request->file('image')->store('img/widget','public');
           
            $widget->update([
                'image' => $imagePath,
                'kategori' => $request->kategori
                
            ]);
             return redirect()->route('widget.index')->with('info', 'Widget Udated successfully');

        }
       
            
            $imagePath = public_path('storage/' . $widget->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('image')->store('img/widget','public');
            $widget = Widget::findOrFail($id);
            $widget->update([
                'image' => $imagePath,
                'kategori' => $request->kategori,
                
            ]);
            
        }
        return redirect()->route('widget.index')->with('info', 'Widget galeri Udated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $imagePath = public_path('storage/' . $widget->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $widget->delete();

        return redirect()->route('widget.index')->with('info', 'Image deleted successfully');
    }
}
