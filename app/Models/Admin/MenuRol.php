<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuRol extends Model
{
    protected $table = "menu_rol";
    public $timestamps = false; // Campos en la base de datos que no se usan (create_up, update_up)
}
