<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    
    public function article()
    {
        return $this->belongsToMany(Article::class,'article_category', 'category_id', 'article_id');
    }
    
}
