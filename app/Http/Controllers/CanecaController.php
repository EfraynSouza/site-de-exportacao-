<?php

namespace App\Http\Controllers;

use App\Models\Caneca;
use Illuminate\Http\Request;

class CanecaController extends Controller
{
    public function CanecasPage()
    {
        $canecas = Caneca::all();
        return view('app.canecas', compact('canecas'));
    }

    public function create()
    {
        return view('admin.canecas.create');
    }

    // public function especificoPage($id)
    // {
    //     $caneca = caneca::where('id', '!=', $prato->$id)
    //     ->take(3)
    //     ->get();

    //     return view('app.canecasEspecifico', compact('canecas'));
    // }

}