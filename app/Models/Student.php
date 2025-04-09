<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student'; // Nombre de la tabla en la base de datos
    protected $fillable = ['name', 'email', 'phone', 'address']; // Campos que se pueden llenar masivamente

}
