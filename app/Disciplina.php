<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'id',
        'professor_id',
        'disciplina',
        'carga_horaria'
    ];

    protected $table = "disciplina";

    public function professor() {
        return $this->belongsTo(Professor::class, 'professor_id');
    }
}
