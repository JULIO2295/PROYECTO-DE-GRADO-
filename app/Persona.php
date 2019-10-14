<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';
    protected $primaryKey="idpersona";

    public $timestamps=false;


    protected $fillable =[
     'iddiscapacidad',
     'idcurso',
     'tipo_persona',
     'nombre',
     'apellidos',
     'direccion',
     'genero',
     'telefono',
     'fecha_nac',
     'ci',
     'estado'
    ];

    protected $guarded =[

    ];
}
