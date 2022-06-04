<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    public $fillable=['matricula', 'nombre', 'apellidoP', 'apellidoM', 'fechaNacimiento', 'email', 'celular', 'calle', 'colonia', 'codigoPostal'];
}
