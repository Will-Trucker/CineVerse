<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $table = 'movies';

    protected $fillable = [
        'nombre',
        'dia',
        'clasificacion',
        'sinopsis',
        'video_path',
        'image_path',
        'hora',
        'asientos',
        'genero'
    ];
}
