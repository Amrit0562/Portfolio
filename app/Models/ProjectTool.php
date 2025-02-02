<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTool extends Model
{
    protected $fillable = [
        'name',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_project_tool');
    }
}
