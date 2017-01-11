<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    //
      protected $table='Envio';
    protected $primaryKey='idEnvio';
    public $timestamps=false;

    protected $fillable =[
     'idCliente',
     'Fecha'
    ];

    protected $guarded =[

    ];
}
