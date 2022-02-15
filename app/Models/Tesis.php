<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
   protected $guarded=['id','created_at','updated_at'];

   
   protected $fillabel=[
      'image',
      'ninv',
      'sgtopografica',
      'disponible',
      'titulo',
      'subtitulo',
      'idioma',
      'autores',
      'lugar',
      'editor',
      'ano',
      'pais',
      'cantpag',
      'dimensiones',
      'matAnexo',
      'dscTemario'
   ];

}
