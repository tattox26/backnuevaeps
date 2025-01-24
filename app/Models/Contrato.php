<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'modalidad',
        'numero_contrato',
        'regimen',
        'archivo_path',
    ];
}






