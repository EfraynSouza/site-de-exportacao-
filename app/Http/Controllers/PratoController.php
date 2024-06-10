<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    public function PratosPage()
    {
        $pratos = Prato::all();
        return view('app.pratos', compact('pratos'));
    }

    public function create()
    {
        return view('admin.pratos.create');
    }

    // public function especificoPage($id)
    // {
    //     $prato = Prato::where('id', '!=', $prato->$id)
    //     ->take(3)
    //     ->get();

    //     return view('app.pratosEspecifico', compact('pratos'));
    // }

}
