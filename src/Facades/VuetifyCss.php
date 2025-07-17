<?php

namespace Itstudioat\VuetifyCss\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Itstudioat\VuetifyCss\VuetifyCss
 */
class VuetifyCss extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Itstudioat\VuetifyCss\VuetifyCss::class;
    }
}
