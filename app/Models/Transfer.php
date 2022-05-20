<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    #many to one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function image()
    {
        return $this->hasMany(Image::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
