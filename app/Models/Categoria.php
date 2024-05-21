<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
 protected $table = 'categorias';

 public function produtos()
 {
    return $this->hasMany(Produto::class);
 }
}