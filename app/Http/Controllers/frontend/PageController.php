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
        //trending image and title
        $trending=Category::orderBy('created_at','asc')->limit(5)->get();
        return view('frontend.layout.home', compact('article','trending'));
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
        $articles::increment('views');
        return view('frontend.layout.article', compact('articles'));
    }
    // public function FooterCategory(){
    //     $footerCat=Category::all();
    //     //return $footerCat;
    //     return view('frontend.layout.app',compact('footerCat'));
    // }
}
