<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'image'
    ];
    
    public function category()
    {
        return $this->belongsToMany(Category::class, 'article_category', 'article_id', 'category_id');
    }
    static public function getRecord()
    {
        return self::select('categories.*')
        ->join('article_category', 'articles.id', '=', 'article_category.article_id')
        ->join('categories', 'categories.id', '=', 'article_category.category_id')
        ->get();
    }
    
}
