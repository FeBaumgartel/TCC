<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuarios_grupos', 'id_grupo', 'id_usuario');
    }
}
