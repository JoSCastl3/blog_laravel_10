<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    // protected $table="users"; //ignora la convenvion y busca en base a esto
    //guarda solo estos campos, los demás los omite
    // protected $fillable=['name','descripcion','categoria'];
    //Omite este campo y los demás los guarda
    // protected $guarded=['status'];
    // En nuestor caso que no tenemos un campo protegido pues se deja el array vacio
    protected $guarded=[];
}
