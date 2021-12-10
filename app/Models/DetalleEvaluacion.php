<?php

namespace App\Models;
use App\Model\Estudiante;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleEvaluacion extends Model
{
    use HasFactory;
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);}
}
