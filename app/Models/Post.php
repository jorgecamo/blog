<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Post extends Model
{
    use HasFactory;
    public function usuarios(){
        return $this->belongsTo(Usuario::class,'id_usuario');
        }
}
