<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['project_id', 'file_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
