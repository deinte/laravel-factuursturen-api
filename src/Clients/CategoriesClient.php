<?php

namespace Deinte\LaravelFactuurSturenApi\Clients;

use Deinte\LaravelFactuurSturenApi\DataObjects\Categories\CategoriesData;
use Spatie\LaravelData\DataCollection;

class CategoriesClient extends BaseClient
{
    public const ENDPOINT = 'categories';

    public function all(): DataCollection
    {
        return CategoriesData::collection($this->client->get(self::ENDPOINT)->json());
    }
}
