<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogRecord extends Model
{
    protected $table = 'blog_record';
    protected $fillabel =
    [
        'blog_id',
        'image',
        'title',
        'description',
    ];
}
