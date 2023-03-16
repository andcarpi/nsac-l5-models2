<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Disciplina extends BaseModel
{
    protected $table = 'public.disciplinas';

    public function subdisciplinas()
    {
        return $this->hasMany(NSacL5SubDisciplina::class, 'disciplina', 'id');
    }
}
