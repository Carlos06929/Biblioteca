<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;
    protected $fillable= ['image','numero_inventario','signatura_topografica','estado','idioma','titulo','autor','lugar','editor','anio','pais','edicion','cantidad_paginas','dimensiones','material_anexo','descripcion'];

}
