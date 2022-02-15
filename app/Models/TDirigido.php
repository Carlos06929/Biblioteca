<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDirigido extends Model
{
    use HasFactory;
    protected $fillable=[
        'numero_inventario',
        'signatura_topografica',
        'estado',
        'titulo',
        'subtitulo',
        'idioma',
        'autor',
        'lugar',
        'anio',
        'pais',
        'descripcion',
        'cantidad_paginas',
        'dimensiones',
        'material_anexo',
        'imagen',

    ];
    protected $guarded=['id','created_at','updated_at'];
}
