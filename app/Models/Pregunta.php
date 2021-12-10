<?php

namespace App\Models;
use App\Model\Tema;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
        public function tema(){
        return $this->belongsTo(Tema::class);}
}
