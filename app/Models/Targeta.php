<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Targeta extends Model
{

    public $timestamps = false; // Desactivar los timestamps automáticos

    use HasFactory;
    protected $table = 'targeta'; // Nombre de la tabla en la base de datos
    protected $fillable = ['url', 'nombre']; // Campos que se pueden llenar masivamente

    public function categoria(){
        return $this->belongsTo(Categorias::class);
    }

}
