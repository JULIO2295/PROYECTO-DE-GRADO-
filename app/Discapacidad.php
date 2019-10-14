<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    protected $table='discapacidad';
    protected $primaryKey="iddiscapacidad";

    public $timestamps=false;


    protected $fillable =[
     'nombre',
     'descripcion',
     'grado',
     'estado'
    ];

    protected $guarded =[

    ];
}
