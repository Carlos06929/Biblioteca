<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
      use HasFactory;
    protected $fillable=['nombre','NombInst','direccion','telefono','ciudad','url','correo','pais','logo','cargo','encargado'];

}
