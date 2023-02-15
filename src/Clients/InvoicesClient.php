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
         * TODO: Use proper way of caching
         */
        $result = Cache::remember('invoices', 600, function () {
            return $this->client->get(self::ENDPOINT)->json();
        });

        return InvoiceData::collection($result);
    }

    public function get(int $id): InvoiceData
    {
        $response = $this->client->get(self::ENDPOINT.'/'.$id)->json();

        if ($response === null) {
            // TODO: Update exception to custom exception
        }

        return InvoiceData::from(array_values($response)[0]);
    }

    public function create(InvoiceData $invoice): null|string
    {
        return $this->client->post(self::ENDPOINT, $invoice)->body();
    }
}
