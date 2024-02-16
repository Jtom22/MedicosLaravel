<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class TipoEstudio extends Model
{
    use HasFactory;
    public function Paciente(){
        return $this->hasMany(Paciente::class);
    }
}
