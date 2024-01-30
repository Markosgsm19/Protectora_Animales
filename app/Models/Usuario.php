<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['_token', 'id', 'nombre', 'apellido', 'sexo', 'direccion', 'telefono'];

    public $timestamps = false;

    private $id;

    private $nombre;

    private $apellido;

    private $sexo;

    private $direccion;

    private $telefono;

    private $edad;

}
