<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use Str;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $title ="Daftar Agenda";   
    $agendas = Agenda::latest()->paginate(10);
        return view('admin.page.agenda.index', compact('agendas','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $title = "Create New Agendas";
       return view('admin.page.agenda.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'content'=>'required'
        ]);

        $agenda = new Agenda;
        $agenda->name = $request->name;
        $agenda->date = $request->date;
        $agenda->location = $request->location;
        $agenda->content = $request->content;
        $agenda->slug= Str::slug($request->name,'-');
        $agenda->save();
        return redirect()->route('agenda.index')->with('info','Agndas Saved successfully!');
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
    $title ="Edit Agenda";
    $agenda = Agenda::findOrFail($id);
    return view('admin.page.agenda.edit', compact('title','agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    'name'=>'required',
        ]);
        Agenda::findOrFail($id)->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'date'=>$request->date,
            'location'=>$request->location,
            'content'=>$request->content
        ]);
        return redirect()->route('agenda.index')->with('info','Agenda sukses diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return redirect()->route('agenda.index')->with('info','Agenda was deleted!?');
    }
}
