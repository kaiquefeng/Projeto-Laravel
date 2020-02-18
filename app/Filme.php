<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filmes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo', 'sinopse', 'duracao', 'imagem', 'data_lancamento'
    ];
}
