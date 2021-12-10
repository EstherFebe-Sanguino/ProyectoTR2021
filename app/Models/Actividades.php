<?php

namespace App\Models;
use App\Model\Materia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;
    
public function materia(){
        return $this->belongsTo(Materia::class);}    
}
