<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'descripcion', 'categoria']; //Campos que pueden ser guardados en la base de datos, ignorando los demas por proteccion
    protected $guarded = []; //Campos que no se pueden modificar asi se inserten en inspecionar la web html
    // protected $table = 'users'; //Si la tabla no se llama igual que el modelo

    public function getRouteKeyname()
    {
        return 'slug';    
    }
}
