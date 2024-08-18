<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    use HasFactory;

    protected $table = "aviones";

    protected $fillable = [
        'modelo',
        'marca',
        'anio',
        'capacidad',
        'Aerolinea'
    ];

    public function vuelos()
    {
        return $this->hasMany(Vuelo::class, 'avion_id');
    }

    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class, 'avion_id');
    }
}
