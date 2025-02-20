<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'image',
        'company_name',
        'company_logo',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('project_images')->singleFile();
        $this->addMediaCollection('company_logos')->singleFile();
    }

    public function projectTools()
    {
        return $this->belongsToMany(ProjectTool::class);
    }
}
