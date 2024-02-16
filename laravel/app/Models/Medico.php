<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidad;

class Medico extends Model
{
    use HasFactory;

    // public function especialidads()
    // {
    //     return $this->hasMany(Especialidad::class);
    // }
        public function especialidads()
    {
        return $this->belongsTo(Especialidad::class);
    }  
    
    public function consultaMedica(){
        return $this->hasMany(ConsultaMedica::class);
    }     
}
