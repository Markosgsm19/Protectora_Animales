<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{
    use HasFactory;

    protected $fillable = ['_token', 'id', 'idAnimal', 'idUsuario', 'fecha', 'razon'];

    public $timestamps = false;

    protected $table = "adopcion";
    private $id;

    private $idAnimal;

    private $idUsuario;

    private $fecha;

    private $razon;




}
