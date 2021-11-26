<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipamento extends Model
{
    protected $fillable = [
    	'latitude', 'longitude', 'foto'];

    public function local() {
    	return $this->belongsTo(Local::class, 'local_id');
    }
}
