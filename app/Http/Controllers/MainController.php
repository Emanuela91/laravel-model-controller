<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// collego il database con il controller 
use App\Models\Movies;

class MainController extends Controller
{
    public function home()
    {
        // richiamo il database
        $movie = Movies::all();
        var_dump($movie);
        die();

        // richiama la pagina home.blade.php in pages dove ci sono i contenuti
        return view('pages.home');
    }
}

// richiama la pagina web.php che manda il contenuto all'esterno