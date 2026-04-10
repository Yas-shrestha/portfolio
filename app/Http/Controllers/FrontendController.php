<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $projects = Project::with('images.file')->orderBy('id', 'desc')->paginate(10);
        return view("Frontend.index", compact("projects"));
    }
    public function projectDetail($slug)
    {
        $project = Project::with('images.file')->where('slug', $slug)->firstOrFail();
        return view('Frontend.portfolio-details', compact('project'));
    }
}
