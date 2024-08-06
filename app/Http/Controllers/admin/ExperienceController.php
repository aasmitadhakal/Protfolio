<?php

namespace App\Http\Controllers\admin;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    public function index()
    {
        $experience = Experience::all();
        return view("admin.Experience.index", compact("experience"));
    }
    public function create()
    {
        return view("admin.Experience.create");
    }
    public function store(Request $request, Experience $experience)
    {
        $input = $request->all();
        $experience = Experience::create($input);
        return redirect()->route("experience.index")->with("success", "Experience added successfully.");
    }
    public function edit(Experience $experience)
    {
        return view('admin.Experience.edit', compact('experience'));
    }
    public function update(Request $request, Experience $experience)
    {
        $input = $request->all();
        $experience->update($input);
        return redirect()->route("experience.index")->with("success", "Experience added successfully.");
    }
    public function show($id)
    {
        // Fetch the experience by ID
        // $experience = Experience::findOrFail($id);

        // Return the view with the experience data
        // return view('admin.Experiences.show', compact('experience'));
    }
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route("experience.index")->with("sucess", "Experience deleted sucessfully");
    }
}
