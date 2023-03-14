<?php

namespace Andcarpi\NsacL5Models\Models;

use Illuminate\Database\Eloquent\Model;

class NSacL5Matriculas extends Model
{
    protected $connection = 'NSacL5';

    protected $table = 'alunos.matriculas';
}
