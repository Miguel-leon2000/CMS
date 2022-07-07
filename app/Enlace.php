<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    protected $table = "enlace";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'imagen',
        'enlace'

    ];

    protected $guarded=[

    ];
}
