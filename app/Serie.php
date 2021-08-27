<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {
    protected $fillable = [
        'nome',
        'plataforma'
    ];

    public $timestamps = false;

    public function episodios() {
        return $this->hasMany(Episodio::class);
    } 
}
