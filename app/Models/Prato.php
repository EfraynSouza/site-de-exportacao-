<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $table = 'pratos';
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
