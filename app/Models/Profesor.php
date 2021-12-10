<?php

namespace App\Models;
use App\Model\Evaluacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    public function evaluacion(){
        return $this->hasMany(Evaluacion::class);}
}
