<?php

namespace Deinte\LaravelFactuurSturenApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deinte\LaravelFactuurSturenApi\FactuurSturenApi
 */
class FactuurSturenApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Deinte\LaravelFactuurSturenApi\FactuurSturenApi::class;
    }
}
