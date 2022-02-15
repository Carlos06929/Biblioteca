<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    use HasFactory;

    protected $fillable=[
       'numero_inventario','signatura_topografica','disponible','titulo','subtitulo','idioma','autor','categoria','lugar','editorial','anio','pais','isbn','cantidad_paginas','dimensiones','material_anexo','descripcion', 'image',
    ];
    protected $guarded=['id','created_at','updated_at'];
}
