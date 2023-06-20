<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::all();
        return view('welcome',compact('program'));
    }

    public function showprogram(){
        $program = Program::all();
        return view('siswa.dataexschool',compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.exschoolinput');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'exschool' => 'required',
        'description'=> 'required',
        'photo' =>'required|image|max:2048',
       ]);

       $name = $request->file('photo')->getClientOriginalName();

       $request->photo->move('photos/',$name);

       program::create([
        'exschool' => $request->exschool,
        'description' => $request->description,
        'photo' => $name,
       ]);

       return redirect()->route('excshool.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $program = Program::findOrFail($id);
        return view('show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program, $id)
    {
        $program = Program::findOrFail($id);
        return view('siswa.editexschool',compact('program'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id){

        $program = Program::findOrFail($id);
        // Update the data with the new values
        $program->exschool = $request->exschool;
        $program->description = $request->description;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = $photo->getClientOriginalName();
            $request->photo->move('photos/',$filename);
            $program->photo = $filename;
        // Save the changes to the database
        $program->save();

        // Redirect back to the view or a different page
        return redirect()->route('siswa.dataexschool')->with('success', 'Data updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('#')->with('success', 'User deleted successfully.');
    }
}
