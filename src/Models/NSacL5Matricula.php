<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Matricula extends BaseModel
{
    protected $table = 'alunos.matriculas';

    public function turma() {
        return $this->belongsTo(NSacL5Turma::class, 'turma', 'codigo');
    }
}
