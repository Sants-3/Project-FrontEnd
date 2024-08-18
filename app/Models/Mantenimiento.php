<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $fillable = ['avion_id', 'fecha', 'descripcion', 'operario'];

    public function avion()
    {
        return $this->belongsTo(Avion::class, 'avion_id');
    }
}
