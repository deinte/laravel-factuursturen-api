<?php

namespace Deinte\LaravelFactuurSturenApi;

use Deinte\LaravelFactuurSturenApi\Clients\CategoriesClient;
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

    public function categories(): CategoriesClient
    {
        return new CategoriesClient($this->client);
    }
}
