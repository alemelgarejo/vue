<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    use HasFactory; 
    public function category() {
        return $this->belongsTo(Category::class);
    } 
    public function image() {
        return $this->hasOne(PostImage::class);
    } 
}
