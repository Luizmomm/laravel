<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'id',
        'aluno',
        'data_nascimento',
        'cpf'
    ];

    protected $table = "aluno";

}
