<?php

namespace Andcarpi\NsacL5Models\Models;

use Carbon\Carbon;

class NSacL5Saida extends BaseModel
{
    protected $table = 'alunos.saidas';

    public function asTimestamp(): Carbon
    {
        $timestamp = Carbon::createFromDate($this->data);
        $timestamp->setTimeFromTimeString($this->hora);

        return $timestamp;
    }
}
