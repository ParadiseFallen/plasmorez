<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $table = 'gallery_image';
    protected $fillabel =
    [
        'gallery_id',
        'image',
        'titile'
    ];
}
