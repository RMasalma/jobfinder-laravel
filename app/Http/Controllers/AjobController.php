<?php

namespace App\Http\Controllers;

use App\Models\ajob;
use Illuminate\Http\Request;

class AjobController extends Controller
{
    public function showAllAjobs(){
        $ajobs=ajob::all();
        
        return view('jobs',compact('ajobs'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $ajobs = ajob::get();
        return view('admin.index',['ajobs' => $ajobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|max:255',
            'company' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);
    
        $ajob = new ajob();
        $ajob->title = $request->title;
        $ajob->company = $request->company;
        $ajob->location = $request->location;
        $ajob->salary = $request->salary;
        $ajob->type = $request->type;
        $ajob->description = $request->description;
        $ajob->save();
    
        

        return redirect()->route('admin.index')->with('success','Job saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ajob = ajob::find($id);
    
        return view('admin.show', ['ajob' => $ajob]);
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ajob = ajob::find($id);
    
        return view('admin.edit', ['ajob' => $ajob]);
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
    
        $ajob = ajob::find($id);
        $ajob->title = $request->title;
        $ajob->description = $request->description;
        $ajob->save();
    
        return redirect()->route('admin.index')->with('success','job updated successfully!');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ajob::destroy($id);
        return redirect()->route('admin.index')
                        ->with('success','Job deleted successfully!');
    }
}
