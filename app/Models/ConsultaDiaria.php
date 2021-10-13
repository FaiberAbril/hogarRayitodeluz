<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UsuarioController;

class ConsultaDiaria extends Model
{
    use HasFactory;

    public function Usuarios()
    {
        return $this->belongsTo(UsuarioController::class);
    }
}
