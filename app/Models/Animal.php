<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['_token', 'id', 'nombre', 'especie', 'raza', 'genero', 'color', 'edad'];

    public $timestamps = false;

    protected $table = "animal";

    private $id;

    private $nombre;

    private $especie;

    private $raza;

    private $genero;

    private $color;

    private $edad;



}
