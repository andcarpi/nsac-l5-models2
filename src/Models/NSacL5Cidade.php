<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Cidade extends BaseModel
{
    protected $table = 'public.cidades';

    public function estado() {
        return $this->belongsTo(NSacL5Estado::class, 'estado', 'codigo');
    }
}
