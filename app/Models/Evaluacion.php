<?php

namespace App\Models;
use App\Model\Estudiante;
use App\Model\Tema;
use App\Model\Profesor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    
public function estudiante(){
        return $this->belongsTo(Estudiante::class);}
    
    public function tema(){
        return $this->belongsTo(Tema::class);}

public function profesor(){
        return $this->belongsTo(Profesor::class);}
}
