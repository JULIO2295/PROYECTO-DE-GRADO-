<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table='modulo';
    protected $primaryKey="idmodulo";

    public $timestamps=false;


    protected $fillable =[
     'nombre',
     'nivel',
     'fecha_creacion',
     'descripcion',
     'estado'
    ];

    protected $guarded =[

    ];
}
