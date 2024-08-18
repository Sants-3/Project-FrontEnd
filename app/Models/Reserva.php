<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;


    protected $table = "reservas";

    protected $fillable = [
        'vuelo_id'
    ];

    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class, 'vuelo_id');
    }
}