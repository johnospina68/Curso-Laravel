<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable = ['nombre']; //Variable para crear campos en forma maxima en la BD, si y solo si los campos ya estan definidos (ELOQUENT)
    protected $guarded = ['id']; //Cuales van hacer los campos que LARAVEL no va a dejar editar
    public $timestamps = false; // Campos en la base de datos que no se usan (create_up, update_up)
}
