<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home()
    {
        $project = Project::all();
        $skill = Skill::all();
        $education = Experience::where('type', 'education')->get();
        $experiencedata = Experience::where('type', 'experience')->get();
        return view('frontend.home.index', compact('project', 'skill', 'education', 'experiencedata'));
    }
}
