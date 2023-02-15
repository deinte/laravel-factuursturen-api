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
        /**
         * __FUNCTION__
         */
        $result = Cache::remember('invoices', 600, function () {
            return $this->client->get(self::ENDPOINT)->json();
        });

        return InvoiceData::collection($result);
    }

    public function create(InvoiceData $invoice)
    {
        $response = $this->client->post('invoices', $invoice->toArray());

        ray()->send($response, $response->body())->purple();
    }
}
