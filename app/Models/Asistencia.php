<?php

namespace App\Models;
use App\Model\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
        public function users(){
        return $this->belongsTo(users::class);}
}
