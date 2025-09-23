<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Mostra il form di contatto
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Salva i dati inviati dal form nel database
     */
    public function store(Request $request)
    {
        // Validazione dei dati
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Salva nel database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect con messaggio di successo
        return redirect()->route('contacts.create')->with('success', 'Messaggio inviato con successo!');
    }

    /**
     * Mostra tutti i contatti salvati
     */
    public function index()
    {
        $contacts = Contact::all(); // prende tutti i record dalla tabella
        return view('contacts.index', compact('contacts'));
    }
}
