<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //Uso de eloquent con accesores y mutadores, para almacenar datos.
    protected function name(): Attribute
    {
        return new Attribute(

            //ACCESORES Con esto antes de traerme el dato me transforma las primeras letras en mayus ejemplo Victor Arana
            get: fn($value) => ucwords($value),

        //--- Funcion valida version antigua---
            // get: function($value){
            //     return ucwords($value); 
            // },

            //MUTADORRES Con esto almacena el nombre en minusculas no importa como lo ingrese el usuario ejemplo VictOr ARAnA va a ingresar como victor arana
            set: fn($value) => strtolower($value)

        //--- Funcion valida version antigua---
            // set: function($value){
            //     return strtolower($value);
            // }
        );
    }
}
