<?php

namespace Deinte\LaravelFactuurSturenApi;

use Deinte\LaravelFactuurSturenApi\Clients\InvoicesClient;
use Illuminate\Http\Client\PendingRequest;

class FactuurSturenApi
{
    public function __construct(protected PendingRequest $client)
    {
    }

    public function invoices(): InvoicesClient
    {
        return new InvoicesClient($this->client);
    }
}
