<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Storage;
use App\Models\Slider;


class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $sliders = Slider::latest()->paginate(5);
        $title = "Slider";
        return view('admin.page.slider.index', compact('title', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Create Sliders";
        return view('admin.page.slider.create', compact('title'));
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
            $imagePath = $request->file('image')->store('img/slider','public');
        }

        $slider = Slider::create([
            'image' => $imagePath,
            'title' => $request->input('title'),
            'content' => $request->input('content')

        ]);
        //assign tags
        $slider->save();
     
            //redirect dengan pesan sukses
            return
                redirect()->route('slider.index')->with([
                    'info' => 'Data Berhasil Disimpan!'
                ]);
        

    }
    /**
     * Display the specified resource.
     */
    public function show(slider $slider)
    {
        $title = "detail slider"; 
        return view('admin.page.slider.show', compact('slider','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        $title = "Edit";
        return view('admin.page.slider.edit', compact(
            'slider',
            'title'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, slider $slider)
    {
        $request->validate([
            'title' => 'required|unique:sliders,title,' . $slider->id,
            'content' => 'required',
        ]);
        if ($request->hasFile('image') == "") {
            $slider = slider::findOrFail($slider->id);
            $slider->update([
                'title' => $request->input('title'),
                'content' => $request->input('content')
            ]);
        } else {
             $slider = slider::findOrFail($slider->id);
            if($slider->image==""){
                 $imagePath = $request->file('image')->store('img/slider','public');
           
            $slider->update([
                'image' => $imagePath,
                'title' => $request->title,
                'content' => $request->content
                
            ]);
             return redirect()->route('slider.index')->with('info', 'slidered Udated successfully');

        }
       
            
            $imagePath = public_path('storage/' . $slider->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('image')->store('img/slider','public');
            $slider = slider::findOrFail($slider->id);
            $slider->update([
                'image' => $imagePath,
                'title' => $request->title,
                'content' => $request->content
                
            ]);
            
        }
        return redirect()->route('slider.index')->with('info', 'slidered Udated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(slider $slider)
    {
  
        $imagePath = public_path('storage/' . $slider->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Image deleted successfully');
    }

}