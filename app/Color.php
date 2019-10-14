<?php

namespace sisEscuela;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table='color';
    protected $primaryKey="idcolor";

    public $timestamps=false;


    protected $fillable =[
     'nombre',
    ];

    protected $guarded =[

    ];

}
