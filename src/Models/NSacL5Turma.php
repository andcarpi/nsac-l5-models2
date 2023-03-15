<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Turma extends BaseModel
{
    protected $table = 'public.turmas';
    protected $primaryKey = 'codigo';

    public function curso() {
        return $this->belongsTo(NSacL5Curso::class, 'curso', 'codigo');
    }

    public function disciplinas() {
        return $this->hasMany(NSacL5Disciplina::class, 'turma', 'codigo')->where('ativo', TRUE);
    }
}
