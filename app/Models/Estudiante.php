<?php

namespace App\Models;
use App\Model\Detalle_evaluacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    public function detalle_evaluacion(){
        return $this->hasMany(Detalle_evaluacion::class);} 

}
