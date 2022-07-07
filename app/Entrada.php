<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = "entrada";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'titulo',
        'contenido',

    ];

    protected $guarded=[

    ];
}
