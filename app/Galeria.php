<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [ 'titulo', 'cliente', 'cidade', 'dirFotoGaleria'];
}
