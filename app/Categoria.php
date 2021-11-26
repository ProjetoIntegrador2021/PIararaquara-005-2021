<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    protected $fillable =
    ['nome'];

    public function peca(){
        return $this->hasMany(Peca::class, 'categoria_id');
    }
}
