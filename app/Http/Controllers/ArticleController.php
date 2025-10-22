<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    // Mostra elenco articoli
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Mostra form creazione articolo
    public function create()
    {
        $categories = Category::all(); // Recupera tutte le categorie
        return view('articles.create', compact('categories'));
    }

    // Salva un nuovo articolo
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        // Se c'è un'immagine, la salviamo
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image_path'] = $path;
        }

        Article::create($data);

        return redirect()->route('articoli.index')->with('success', 'Articolo creato con successo!');
    }

    // Mostra un singolo articolo
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // Mostra form modifica articolo
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    // Aggiorna articolo
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        // Se viene caricata una nuova immagine, aggiorna il percorso
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image_path'] = $path;
        }

        $article->update($data);

        return redirect()->route('articoli.index')->with('success', 'Articolo aggiornato con successo!');
    }

    // Elimina articolo
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articoli.index')->with('success', 'Articolo eliminato con successo!');
    }
}
