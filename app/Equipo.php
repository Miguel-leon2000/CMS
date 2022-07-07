<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = "equipo";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'imagen',
        'nombres',
        'cargo'

    ];

    protected $guarded=[

    ];
}
