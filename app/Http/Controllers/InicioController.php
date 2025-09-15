<?php

namespace App\Http\Controllers;

use App\Models\Drop;
use App\Models\Categoria;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $categorias = Categoria::where('estado', 1)->get();
        $drops = Drop::where('estado', 1)->get();

        return view('index', compact('categorias', 'drops'));
    }
}
