<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension    = $image->getClientOriginalExtension();

            $slug      = Str::slug($originalName);
            $uniqueNum = random_int(1000, 9999);
            $title     = $slug . '-' . $uniqueNum;

            // Ensure title uniqueness
            while (File::where('title', $title)->exists()) {
                $uniqueNum = random_int(1000, 9999);
                $title     = $slug . '-' . $uniqueNum;
            }

            $fileName = $title . '.' . $extension;
            $image->storeAs('files', $fileName, 'public');

            File::create([
                'file_name' => 'files/' . $fileName,
                'title'     => $title,
            ]);
        }

        return redirect()->route('files.index')->with('success', 'Files saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return view('Backend.File.view', compact('file'));
    }



    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        $path = $file->file_name;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }

        $file->delete();

        return redirect()->route('files.index')->with('success', 'File deleted.');
    }
}
