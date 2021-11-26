<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\support\facades\Auth;

class Peca extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'nome', 'categoria_id', 'nserie', 'descricao', 'estado', 'marca', 'foto', 'user_id'];
    
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

     protected static function boot(){
        parent::boot();
        static::saving(function ($model) {
            $model->user_id = Auth::user()->id;
        });
        static::deleting (function ($model) {
            $model->user_id = Auth::user()->id;
        });
        static::restoring (function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }
    
}
