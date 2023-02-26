<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    
    protected $table = 'equipos';

    public function equipos()
    {
        return $this->belongsTo(Jugador::class);
    }
}