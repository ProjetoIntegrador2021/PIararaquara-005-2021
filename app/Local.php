<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Local extends Model
{
    protected $table = 'locais';

    protected $fillable = [
    	'nome'];

    public function equipamento(){
    	return $this->hasMany(Equipamento::class, 'local_id');
    }
}
