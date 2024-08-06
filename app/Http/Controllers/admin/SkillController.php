<?php

namespace App\Http\Controllers\admin;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $skill = Skill::all();
        return view("admin.skill.index", compact("skill"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.skill.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if ($request->image != "") {
            $imageName = fileUpload($request, "image", "project");
            $input["image"] = $imageName;
        }
        $skill = Skill::create($input);
        return redirect()->route("skill.index")->with("success", "Skill added successfully.");
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
    public function edit(Skill $skill)
    {
        //
        return view("admin.skill.edit", compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $input = $request->all();
        if ($request->image != "") {
            $imageName = fileUpload($request, "image", "project");
            $input["image"] = $imageName;
        }
        $skill->update($input);
        return redirect()->route("skill.index")->with("success", "Skill added successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
        if ($skill->image != "") {
            $file = $skill->image;
            removeFile($file);
        }
        $skill->delete();
        return redirect()->route("skill.index")->with("success", "skill deleted sucessfully");
    }
}
