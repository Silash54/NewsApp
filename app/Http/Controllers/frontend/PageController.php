<?php

namespace App\Http\Controllers\frontend;

use App\Models\Article;
use App\Models\Category;

class PageController extends BaseController
{
    public function home()
    {
        //Top 4 Articles
        $article = Article::orderBy('created_at', 'desc')->limit(4)->get();
        return view('frontend.layout.home', compact('article'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = $category->article;
        return view('frontend.layout.category', compact('category', 'articles'));
    }
    public function article($id)
    {
        $articles = Article::find($id);
        //$articles::increment('views');
        return view('frontend.layout.article', compact('articles'));
    }
}
