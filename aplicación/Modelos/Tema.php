<?php

namespace App\Models;
use App\Model\Materia;
use App\Model\Pregunta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
        public function materia(){
        return $this->belongsTo(Materia::class);} 
    
    public function pregunta(){
        return $this->hasMany(Pregunta::class);} 

}
