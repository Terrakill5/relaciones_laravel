<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //relacion uno a uno, este es el normal, puesto que este modelo no tiene llaves foraneas
    public function phone() {
        //Esto permite buscar la relacion 1:1 con la tabla Phone
        //Primaria: id
        //foranea: user_id
        return $this->hasOne(Phone::class);
        //Usar el siguiente sino se estan usando convenciones
        // return $this->hasOne(Phone::class,'user_id','id');
    }
}
