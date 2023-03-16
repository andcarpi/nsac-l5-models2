<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Estado extends BaseModel
{
    protected $table = 'public.estados';

    public function pais()
    {
        return $this->belongsTo(NSacL5Pais::class, 'pais', 'codigo');
    }
}
