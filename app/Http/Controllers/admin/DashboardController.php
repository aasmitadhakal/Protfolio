<?php

namespace App\Http\Controllers\admin;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $project = Project::count();
        $skill = Skill::count();
        $vars = [
            "project" => ["bx-news", "project.index", $project],
            "skill" => ["bx-copy-alt", "skill.index", $skill],
        ];

        return view('admin.dashboard.index', compact("vars"));
    }
}
