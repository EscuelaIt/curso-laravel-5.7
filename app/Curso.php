<?php

namespace App;

use App\Profesor;
use App\Estudiante;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    /**
     * Atributos que se pueden establecer de forma masiva
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'profesor_id',
    ];

    /**
     * Atributos que se ocultan al
     * mostrar la información del modelo
     */
    protected $hidden = [];

    public function getTituloMayusculasAttribute()
    {
        // return strtoupper($this->titulo);
        return strtoupper($this->attributes['titulo']);
    }

    public function setTituloAttribute($titulo)
    {
        $this->attributes['titulo'] = strtolower($titulo);
    }

    public function getOptionsAttribute()
    {
        return json_decode($this->attributes['options']);
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
}
