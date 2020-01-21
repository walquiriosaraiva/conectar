<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{

    protected $table = 'administrador';

    protected $fillable = [
        'nome', 'email', 'senha', 'login'
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];

}
