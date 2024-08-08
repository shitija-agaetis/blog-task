<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'author',
        'image_path', 
       
    ];
   public function favoritedBy()
    {
         return $this->belongsToMany(User::class, 'category_user', 'category_id', 'user_id')->withTimestamps();
    }
}

