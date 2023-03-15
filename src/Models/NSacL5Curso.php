<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Curso extends BaseModel
{
    protected $table = 'public.cursos';
    protected $primaryKey = 'codigo';

    public function turmas() {
        return $this->hasMany(NSacL5Turma::class, 'curso', $this->primaryKey);
    }
}
