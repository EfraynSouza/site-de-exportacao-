<?php

namespace App\Http\Controllers;

use App\Models\Escultura;
use Illuminate\Http\Request;

class EsculturaController extends Controller
{
    public function EsculturasPage()
    {
        $Esculturas = Escultura::all();
        return view('app.esculturas', compact('esculturas'));
    }

    public function create()
    {
        return view('admin.esculturas.create');
    }

    // public function especificoPage($id)
    // {
    //     $escultura = escultura::where('id', '!=', $escultura->$id)
    //     ->take(3)
    //     ->get();

    //     return view('app.esculturasEspecifico', compact('esculturas'));
    // }

}