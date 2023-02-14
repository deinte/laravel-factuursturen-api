<?php

namespace Deinte\LaravelFactuurSturenApi\Clients;

use Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\InvoiceData;
use Illuminate\Support\Facades\Cache;
use Spatie\LaravelData\DataCollection;

class InvoicesClient extends BaseClient
{
    public const ENDPOINT = 'invoices';

    public function all(): DataCollection
    {
        $result = Cache::remember('invoices', 600, function () {

            return $this->client->get('invoices')->json();
        });

        return InvoiceData::collection($result);
    }
}
