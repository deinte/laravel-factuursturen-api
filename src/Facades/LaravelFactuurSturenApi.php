<?php

namespace Deinte\LaravelFactuurSturenApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deinte\LaravelFactuurSturenApi\LaravelFactuurSturenApi
 */
class LaravelFactuurSturenApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Deinte\LaravelFactuurSturenApi\LaravelFactuurSturenApi::class;
    }
}
