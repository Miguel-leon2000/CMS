<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    protected $table = "pagina";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'iduser',
        'idplantilla',
        'dominio',
        'estado'

    ];

    protected $guarded=[

    ];
}
