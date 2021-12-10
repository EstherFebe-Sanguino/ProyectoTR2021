<?php

namespace App\Models;
use App\Model\Activides;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    public function actividades(){
        return $this->hasMany(Actividades::class);} 
}
