<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Partidas extends Model
{

    public $timestamps = false; // Desactivar los timestamps automáticos

    use HasFactory;

    protected $table = 'partidas'; // Nombre de la tabla en la base de datos
    protected $fillable = ['user_id', 'duracion', 'clicks', 'puntos']; // Campos que se pueden llenar masivamente

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
