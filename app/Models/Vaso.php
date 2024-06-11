<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaso extends Model
{
    protected $table = 'vasos';
    protected $fillable = [
        'nome',
        'preco',
        'tamanho',
        'descricao',
        'imagem',
        'categoria_id',
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
}