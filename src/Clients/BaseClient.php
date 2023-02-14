<?php

namespace Deinte\LaravelFactuurSturenApi\Clients;

use Illuminate\Http\Client\PendingRequest;

class BaseClient
{
    public function __construct(protected PendingRequest $client)
    {
    }
}
