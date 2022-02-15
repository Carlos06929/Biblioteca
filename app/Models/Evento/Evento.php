<?php

namespace App\Models\Evento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo_evento',
        'hora_inicio',
        'fecha_inicio',
        'fecha_fin',
        'lugar',
        'estado',

    ];

    public function getColorEstadoAttribute(){
        $colores = ['badge bg-secondary','badge bg-danger','badge bg-success'];
        return $colores[$this->attributes['estado'] - 1];
    }
    public function getDescripcionEstadoAttribute(){
        $descripcion = ['ESPERANDO','FINALIZADO','INICIADO'];
        return $descripcion[$this->attributes['estado'] - 1];
    }

    public function getFechaInicioFormateadaAttribute(){
        return Carbon::parse($this->fecha_inicio)->format('d/m/Y');

    }
    public function getFechaFinFormateadaAttribute(){
        return Carbon::parse($this->fecha_fin)->format('d/m/Y');

    }
}
