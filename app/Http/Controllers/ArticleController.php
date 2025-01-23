<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $category = Category::select('name')->get();
        $article = Article::all();
        return view('admin.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::select('name', 'id')->get();
        return view('admin.articles.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articles = new Article();
        $articles->title = $request->title;
        $articles->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $articles->image = "images/$newName";
        }
        $articles->save();
        $articles->category()->attach($request->category_id);
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('admin.articles.show', compact('article'));
    }

    /**s
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articles = Article::find($id);
        $articles->title = $request->title;
        $articles->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $articles->image = "images/$newName";
        }
        $articles->update();
        $articles->category()->async($request->category_id);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
