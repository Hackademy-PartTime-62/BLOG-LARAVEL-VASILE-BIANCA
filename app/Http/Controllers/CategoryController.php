<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Elenco di tutte le categorie
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Mostra form per creare una nuova categoria
    public function create()
    {
        return view('categories.create');
    }

    // Salva una nuova categori
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('categories.index')
            ->with('success', 'Categoria creata con successo!');
    }

    // Mostra form per modificare una categoria
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Aggiorna una categoria esistente
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('categories.index')
            ->with('success', 'Categoria aggiornata con successo!');
    }

    // Elimina una categoria
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Categoria eliminata correttamente!');
    }
}
