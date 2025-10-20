<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller

 {
    // Metodo per mostrare la pagina "account"
    public function index()
    {
        return view('account.index');
    }
}   

