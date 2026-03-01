<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Category';
        $categories = Category::latest()->paginate(10);
        return view('admin.page.kategori.index', compact('title','categories'));
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
         //
         $request->validate([
            'name' => 'required|unique:categories'
        ],[
            'required.name'=>'nama harus diisi',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-') 
        ]);

       
            return redirect()->route('post.create')->with(['info' => 'Data Kategori Berhasil Disimpan!']);
       
    }

   
}
