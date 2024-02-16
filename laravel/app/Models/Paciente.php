<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CoberturaMedica;

class Paciente extends Model
{
    use HasFactory;

    public function CoberturaMedica()
    {
        return $this->belongsTo(CoberturaMedica::class);
    }
    
    public function consultaMedica(){
        return $this->hasMany(ConsultaMedica::class);
    }
}
