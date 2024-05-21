<?php

namespace app\Models;

use illuminate\Database\eloquent\Model;

class Produto extends Model
{
  protected $table = 'produtos';

  public function categoria()
  {
    return $this->belongsTo(Categoria::class);
  }
}