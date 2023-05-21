<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_Carrera');
    }
}
