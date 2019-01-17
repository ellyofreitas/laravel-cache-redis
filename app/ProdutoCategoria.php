<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCategoria extends Model
{
    protected $fillable = [
        'produto_id', 'categoria_id'
    ];
}
