<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['title', 'file_name'];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
