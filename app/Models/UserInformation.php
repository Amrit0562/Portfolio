<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class UserInformation extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'description',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->singleFile();
    }
}
