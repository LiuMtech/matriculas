<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'registros';
    public $timestamps = false;
    public function carrera()
    {
        return $this->belongsTo(Carreras::class, 'id_Carrera');
    }
}
