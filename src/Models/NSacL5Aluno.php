<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Aluno extends BaseModel
{
    protected $table = 'alunos.dados';

    protected $primaryKey = 'matricula';

    protected $keyType = 'string';

    public $timestamps = false;

    public function matriculas()
    {
        return $this->hasMany(NSacL5Matricula::class, 'aluno', 'matricula');
    }

    public function telefones()
    {
        return $this->hasMany(NSacL5Telefone::class, 'dono', 'matricula');
    }

    public function endereco()
    {
        return $this->hasOne(NSacL5Endereco::class, 'codigo', 'dono');
    }

    public function atrasos()
    {
        return $this->hasMany(NSacL5Atraso::class, 'aluno', 'matricula');
    }

    public function saidas()
    {
        return $this->hasMany(NSacL5Saida::class, 'aluno', 'matricula');
    }

    public function hasCPF(): bool
    {
        return ! empty(trim($this->cpf));
    }
}
