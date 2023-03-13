<?php

namespace Andcarpi\NsacL5Models\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andcarpi\NsacL5Models\NsacL5Models
 */
class NsacL5Models extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Andcarpi\NsacL5Models\NsacL5Models::class;
    }
}
