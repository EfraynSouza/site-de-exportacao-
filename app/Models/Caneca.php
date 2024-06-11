<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caneca extends Model
{
    protected $table = 'Canecas';
    protected $fillable = [
        'nome',
        'preco',
        'descricao',
        'imagem',
        'categoria_id',
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
}