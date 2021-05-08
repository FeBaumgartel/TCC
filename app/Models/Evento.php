<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    public function hinos()
    {
        return $this->belongsToMany(Hino::class, 'hinos_eventos', 'id_evento', 'id_hino')
            ->orderBy('hinos_eventos.sequencia');
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupos_eventos', 'id_evento', 'id_grupo');
    }

}
