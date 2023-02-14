<?php

namespace Deinte\LaravelFactuurSturenApi\Clients;

use Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\InvoiceData;
use Spatie\LaravelData\DataCollection;

class InvoicesClient extends BaseClient
{
    public const ENDPOINT = 'invoices';

    public function all(): DataCollection
    {
        $result = $this->client->get('invoices')->json();

        return InvoiceData::collection($result);
    }
}
