<?php

namespace Sanchit\LaravelCustomFields\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sanchit\LaravelCustomFields\LaravelCustomFields
 */
class LaravelCustomFields extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sanchit\LaravelCustomFields\LaravelCustomFields::class;
    }
}
