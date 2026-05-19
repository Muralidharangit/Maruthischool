<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_image_id',
        'image',
    ];

    public function projectImage()
    {
        return $this->belongsTo(ProjectImage::class, 'project_image_id');
    }
}
