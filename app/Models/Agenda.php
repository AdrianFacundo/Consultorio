<?php
// app/Models/Agenda.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paciente_agenda',
        'fecha',
        'hora',
        'telefono',
    ];
}