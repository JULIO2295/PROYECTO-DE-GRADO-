<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='rol';
    protected $primaryKey="idrol";

    public $timestamps=false;


    protected $fillable =[
     'nombre',
     'descripcion',
     'estado'
    ];

    protected $guarded =[

    ];
}
