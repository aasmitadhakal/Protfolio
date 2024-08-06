<?php

namespace App\Http\Controllers\admin;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $project = Project::all();
        return view("admin.project.index", compact("project"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.project.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $rules = [
            'title' => 'required|min:3|unique:blogs,title',
        ];
        if ($request->image != "") {
            $rules['image'] = "image";
        }
        if ($request->image != "") {
            $imageName = fileUpload($request, "image", "project");
            $input["image"] = $imageName;
        }
        $project = Project::create($input);
        return redirect()->route("skill.index")->with("success", "Project added successfully.");
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
    public function edit(Project $project)
    {
        //
        return view("admin.project.edit", compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $input = $request->all();
        $rules = [
            'title' => 'required|min:3|unique:blogs,title',
        ];
        if ($request->image != "") {
            $rules['image'] = "image";
        }
        if ($request->image != "") {
            $imageName = fileUpload($request, "image", "project");
            $input["image"] = $imageName;
        }
        $project->update($input);
        return redirect()->route("project.index")->with("success", "Project upadte successfully.");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        if ($project->image != "") {
            $file = $project->image;
            removeFile($file);
        }
        $project->delete();
        return redirect()->route("project.index")->with("success", "Project deleted sucessfully");
    }
}
