<?php

namespace Andcarpi\NsacL5Models\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $connection = 'NSacL5';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setConnection(config('nsac-l5-models.Connection.Name'));
    }
}
