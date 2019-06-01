<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome','categoria_pai'];


    public function subcategorias()
     {
         return $this->hasMany(Categoria::class, 'categoria_pai');
     }

     public function produtos()
      {
          return $this->hasMany(Produto::class, 'id_categoria');
      }
}
