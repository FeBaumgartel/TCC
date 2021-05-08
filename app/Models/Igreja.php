<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $table = 'igrejas';

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'id_igreja');
    }
}
