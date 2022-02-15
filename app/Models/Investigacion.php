<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    use HasFactory;

    protected $fillable= ['image','numero_inventario','signatura_topografica','estado','idioma','titulo','tema','autor','lugar','editor','anio','pais','edicion','editorial','isbn','cantidad_paginas','dimensiones','material_anexo','descripcion'];
}
