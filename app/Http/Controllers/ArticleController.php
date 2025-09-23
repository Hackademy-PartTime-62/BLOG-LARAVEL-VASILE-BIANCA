<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Mostra la lista di tutti gli articoli
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Mostra il dettaglio di un singolo articolo
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }
}
