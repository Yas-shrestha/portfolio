<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'img', 'category', 'client', 'project_date', 'project_url', 'description'];
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
