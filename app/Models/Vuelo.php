<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $table="vuelo";
    protected $fillable=[
        "idVuelo",
        "origen",
        "destino",
        "numeroVuelo",
        "horaSalida",
        "horaLlegada",
        "fechaLlegada",
        "fechaSalida",
        "fechaRegreso"
    ];
    public $timestamps=false;

        public function ciudadOrigen()
        {
            return $this->belongsTo(Ciudad::class, 'origen', 'Nombre');
        }
    
        public function ciudadDestino()
        {
            return $this->belongsTo(Ciudad::class, 'destino', 'Nombre'); 
        }
        public function avion()
        {
            return $this->belongsTo(Avion::class, 'avion_id'); 
        }
        public function reservas()
        {
            return $this->hasMany(Reserva::class, 'vuelo_id');
        }
    }


