<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table='contenido';
    protected $primaryKey="idcontenido";

    public $timestamps=false;


    protected $fillable =[
     'idmodulo',
     'nombre',
     'descripcion',
     'fecha_creacion',
     'estado'
    ];

    protected $guarded =[

    ];
}
