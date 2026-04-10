<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(4);
        return view('Backend.Project.index', compact('projects'));
    }

    public function create()
    {
        $files = File::latest()->get();
        return view('Backend.Project.create', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:255|unique:projects,slug',
            'client'       => 'nullable|string|max:255',
            'project_date' => 'nullable|date',
            'project_url'  => 'nullable|url',
            'description'  => 'nullable|string',
            'file_ids'     => 'nullable|array',
            'file_ids.*'   => 'exists:files,id',
        ]);

        $project = Project::create([
            'title'        => $request->title,
            'slug'         => Str::slug($request->slug) ?? Str::slug($request->title),
            'client'       => $request->client,
            'project_date' => $request->project_date,
            'project_url'  => $request->project_url,
            'description'  => $request->description,
        ]);
        // dd($request->file_ids);
        if ($request->filled('file_ids')) {
            foreach ($request->file_ids as $fileId) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'file_id'    => $fileId,
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project created.');
    }

    public function show(Project $project)
    {
        $project->load('images.file');
        return view('Backend.Project.view', compact('project'));
    }

    public function edit(Project $project)
    {
        $project->load('images.file');
        $files = File::latest()->get();
        return view('Backend.Project.edit', compact('project', 'files'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:255|unique:projects,slug,' . $project->id,
            'client'       => 'nullable|string|max:255',
            'project_date' => 'nullable|date',
            'project_url'  => 'nullable|url',
            'description'  => 'nullable|string',
            'file_ids'     => 'nullable|array',
            'file_ids.*'   => 'exists:files,id',
        ]);

        $project->update([
            'title'        => $request->title,
            'slug'         => Str::slug($request->slug) ?? Str::slug($request->title),
            'client'       => $request->client,
            'project_date' => $request->project_date,
            'project_url'  => $request->project_url,
            'description'  => $request->description,
        ]);

        if ($request->filled('file_ids')) {
            // delete old images and replace with new selection
            $project->images()->delete();
            foreach ($request->file_ids as $fileId) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'file_id'    => $fileId,
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project updated.');
    }

    public function destroy(Project $project)
    {
        $project->images()->delete();
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted.');
    }
}
