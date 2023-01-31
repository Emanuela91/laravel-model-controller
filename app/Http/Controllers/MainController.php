<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

collego 
use App\Models\Movie;

class MainController extends Controller
{
    public function home()
    {
        // richiama la pagina home.blade.php in pages dove ci sono i contenuti
        return view('pages.home');
    }
}

// richiama la pagina web.php che manda il contenuto all'esterno