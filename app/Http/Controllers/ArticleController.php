<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     */
    public function create()
    {
        $article = new Article();
        return view('articles.create', compact('article'));
    }

    /**
     * Store a newly created article in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'body'  => 'required|string',
        ]);

        Article::create($data);

        $request->session()->flash('status', 'Статья успешно сохранена!');
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified article.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified article in storage.
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'body'  => 'required|string',
        ]);

        $article->update($data);

        $request->session()->flash('status', 'Статья успешно обновлена!');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified article from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')
                         ->with('status', 'Статья успешно удалена!');
    }
}
