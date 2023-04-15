<?php

namespace MG\CSV\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MG\CSV\CSV
 */
class CSV extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MG\CSV\CSV::class;
    }
}
