<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::orderBy("created_at", "desc")->paginate(10);
        return view('Backend.File.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.File.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images'   => 'required|array|min:1',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        foreach ($request->file('images') as $image) {
            File::create([
                'file_name' => $image->store('files', 'public')
            ]);
        }

        return redirect()->route('files.index')->with('success', 'Files saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return view('Backend.File.show', compact('file'));
    }

    public function edit(File $file)
    {
        return view('Backend.File.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
            'images'   => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $existingPaths = json_decode($file->images, true) ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $originalName = $image->getClientOriginalName();

                // Check if a file with the same name already exists in this record
                $isDuplicate = collect($existingPaths)->contains(function ($path) use ($originalName) {
                    return basename($path) === $originalName;
                });

                if (!$isDuplicate) {
                    $existingPaths[] = $image->store('files', 'public');
                }
            }
        }

        $file->update([
            'title'  => $request->title,
            'file_name' => json_encode($existingPaths),
        ]);

        return redirect()->route('files.index')->with('success', 'File updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        Storage::disk('public')->delete($file->file_name);
        $file->delete();

        return redirect()->route('files.index')->with('success', 'Deleted.');
    }
}
