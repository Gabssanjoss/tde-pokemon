<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();
        return view('coach.index', compact('coaches'));
    }

    public function create()
    {   
        return view('coach.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images', 'public');
        $coach = Coach::create([
            
            'name'=>$request->name,
            'image'=>$image

        ]);
        return redirect('coach')->with('success', 'coach created successfully.');
    }

    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coach.edit', compact('coach'));
    }

    public function update(Request $request, $id)
    {
        $coach = Coach::findOrFail($id);
        $coach->update($request->all());
        return redirect('coach')->with('success', 'coach updated successfully.');
    }

    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();
        return redirect('coach')->with('success', 'coach deleted successfully.');
    }
}
