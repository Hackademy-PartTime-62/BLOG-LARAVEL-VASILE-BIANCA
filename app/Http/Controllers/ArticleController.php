<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    // Lista articoli
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Dettaglio articolo
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    // Mostra form di creazione
    public function create()
    {
        return view('articles.create');
    }

    // Salva nuovo articolo
    public function store(StoreArticleRequest $request)
    {
        // Prendo i dati validati dal FormRequest
        $data = $request->validated();

        // Se è stata caricata un'immagine valida
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Creo un nome unico con il timestamp + estensione
            $filename = time() . '.' . $request->file('image')->extension();

            // Salvo in storage/app/public/articles
            $imagePath = $request->file('image')->storeAs('articles', $filename, 'public');

            // Aggiungo il path ai dati da salvare nel DB
            $data['image_path'] = $imagePath;
        }

        // Creo l'articolo con i dati (inclusa l'immagine se presente)
        Article::create($data);

        // Redirect con messaggio di successo
        return redirect()
            ->route('articoli.create')
            ->with(['success' => 'Articolo creato con successo!']);
    }
}
