<?php

namespace Andcarpi\NsacL5Models\Models;

use Carbon\Carbon;

class NSacL5Atraso extends BaseModel
{
    protected $table = 'alunos.atrasos';

    public function asTimestamp(): Carbon
    {
        $timestamp = Carbon::createFromDate($this->data);
        $timestamp->setTimeFromTimeString($this->hora);
        return $timestamp;
    }
}
