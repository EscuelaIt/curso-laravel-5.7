<?php

namespace App;

use App\Curso;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    /**
     * Atributos que se pueden establecer de forma masiva
     */
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'profesion',
    ];

    /**
     * Atributos que se ocultan al
     * mostrar la información del modelo
     */
    protected $hidden = [];

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
