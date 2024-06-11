<?php

namespace App\Http\Controllers;

use App\Models\Vaso;
use Illuminate\Http\Request;

class VasoController extends Controller
{
    public function VasosPage()
    {
        $Vasos = Vaso::all();
        return view('app.vasos', compact('vasos'));
    }

    public function create()
    {
        return view('admin.vasos.create');
    }

    // public function especificoPage($id)
    // {
    //     $vaso = vaso::where('id', '!=', $vaso->$id)
    //     ->take(3)
    //     ->get();

    //     return view('app.vasosEspecifico', compact('vasos'));
    // }

}