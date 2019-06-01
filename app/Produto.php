<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descicao', 'tamanho', 'peso', 'id_categoria', 'dirFotoProd'];

    public function categorias(){
    return $this->belongsToMany(Categoria::class, 'id');
}


}
