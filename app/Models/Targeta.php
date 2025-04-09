<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Targeta extends Model
{
    use HasFactory;
    protected $table = 'targeta'; // Nombre de la tabla en la base de datos
    protected $fillable = ['url', 'nombre']; // Campos que se pueden llenar masivamente
}
