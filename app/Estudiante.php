<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    /**
     * Atributos que se pueden establecer de forma masiva
     */
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'carrera',
    ];

    /**
     * Atributos que se ocultan al
     * mostrar la información del modelo
     */
    protected $hidden = [];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}
