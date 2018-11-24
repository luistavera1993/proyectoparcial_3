<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    //
    protected $fillable = ['cedula', 'contrasena2', 'nombres','paquete','minutos','internet','cable','total'];
}
