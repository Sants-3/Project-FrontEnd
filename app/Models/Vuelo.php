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
<<<<<<< HEAD

    public $timestamps=false;

}
=======
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


>>>>>>> 7b2635a2148fb6ab878f4eb4c50de2f66fa7d86a
