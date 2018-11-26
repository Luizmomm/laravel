<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'id',
        'professor',
        'data_nascimento',
        'cpf'
    ];

    protected $table = "professor";

    public function disciplina() {
        return $this->hasMany(Disciplina::class, 'professor_id');
    }
}
