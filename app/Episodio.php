<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model {
    protected $fillable = [
        'descricao',
        'data',
        'avaliacao',
        'comentario'
    ];

    public $timestamps = false;

    public function serie() {
        return $this->belongsTo(Serie::class);
    } 
}
