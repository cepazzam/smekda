<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $posts = Post::latest()->paginate(10);
        $title = "Berita";
        return view('admin.page.berita.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::latest()->get();
        $title = "Create Post";
        return view('admin.page.berita.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required'
        ]);

        //upload image
       $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('img/post','public');
        }

        $post = Post::create([
            'image' => $imagePath,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title'), '-'),
            'category_id' => $request->input('category_id'),
            'position' => $request->input('position'),
            'content' => $request->input('content')

        ]);
        //assign tags
        $post->save();
     
            //redirect dengan pesan sukses
            return
                redirect()->route('post.index')->with([
                    'info' => 'Data Berhasil Disimpan!'
                ]);
        

    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $title = "detail Post";    
        
        return view('admin.page.berita.show', compact('post','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $title = "Edit";
        $categories = Category::latest()->get();
        return view('admin.page.berita.edit', compact(
            'post',
            'categories',
            'title'
        )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id,
            'category_id' => 'required',
            'content' => 'required',
        ]);
        if ($request->hasFile('image') == "") {
            $post = Post::findOrFail($post->id);
            $post->update([
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title'), '-'),
                'category_id' => $request->input('category_id'),
                'position' => $request->input('position'),
                'content' => $request->input('content')
            ]);
        } else {
             $post = Post::findOrFail($post->id);
            if($post->image==""){
                 $imagePath = $request->file('image')->store('img/post','public');
           
            $post->update([
                'image' => $imagePath,
                'title' => $request->title,
                'slug' => Str::slug($request->title, '-'),
                'category_id' => $request->category_id,
                'position' => $request->position,
                'content' => $request->content
                
            ]);
             return redirect()->route('post.index')->with('info', 'Posted Udated successfully');

        }
       
            
            $imagePath = public_path('storage/' . $post->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
                
            }
            $imagePath = $request->file('image')->store('img/post','public');
            $post = Post::findOrFail($post->id);
            $post->update([
                'image' => $imagePath,
                'title' => $request->title,
                'slug' => Str::slug($request->title, '-'),
                'category_id' => $request->category_id,
                'position' => $request->position,
                'content' => $request->content
                
            ]);
            
        }
        return redirect()->route('post.index')->with('info', 'Posted Udated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delcategory(String $id){
       $category = DB::table('categories')->where('id',$id)->delete();
              return redirect()->route('post.index')->with('info', 'Posted Udated successfully');

    }
    public function destroy(Post $post)
    {
  
        $imagePath = public_path('storage/' . $post->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $post->delete();

        return redirect()->route('post.index')->with('success', 'Image deleted successfully');
    }

}