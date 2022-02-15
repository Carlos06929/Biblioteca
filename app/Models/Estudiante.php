<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=[
        'carrera',
        'registro',
        'ci',
        'nombre',
        'apellidos',
        'lugarNacimiento',
        'fechaNacimiento',
        'nacionalidad',
        'domicilio',
        'ciudad',
        'telefono',
        'correo',
        'profesion',
        'image'

    ];

    protected $guarded=['id','created_at','updated_at'];
}
