<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table='actividad';
    protected $primaryKey="idactividad";

    public $timestamps=false;


    protected $fillable =[
     'idcontenido',
     'idcurso',
     'iduser',
     'nombre',
     'descripcion',
     'fecha_creacion',
     'estado'
    ];

    protected $guarded =[

    ];
}
