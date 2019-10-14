<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='curso';
    protected $primaryKey="idcurso";

    public $timestamps=false;


    protected $fillable =[
     'idprofesor',
     'nombre',
     'descripcion',
     'estado'
    ];

    protected $guarded =[

    ];
}
