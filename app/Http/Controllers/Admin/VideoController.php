<?php

namespace App\Http\Controllers\Admin;
use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $videos = Video::latest()->paginate(9);
        $title = "Videos";
        return view('admin.page.video.index', compact('title','videos'));
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
        //
        $request->validate([
            'title'=>'required'
        ]);

        $video = Video::create([
            'title' => $request->title,
            'embed' => $request->embed
        ]);
            return redirect()->route('video.index')->with(['info' => 'Data Berhasil Disimpan!']);
        
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

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'embed' => 'required'
        ]);

        $video = Video::findOrFail($video->id);
        $video->update([
            'title' => $request->title,
            'embed' => $request->embed
        ]);
            return redirect()->route('video.index')->with(['info' => 'Data Berhasil Diupdate!']);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
            return redirect()->route('video.index')->with(['info' => 'Data Berhasil Dihapus!']);
    }
}
