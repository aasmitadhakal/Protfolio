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
        $frontend = Experience::where('type', 'frontend')->get();
        $backend = Experience::where('type', 'backend')->get();
        return view('frontend.home.index', compact('project', 'skill', 'frontend', 'backend'));
    }
}
