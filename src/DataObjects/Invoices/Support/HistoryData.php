<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\Support;

use Carbon\Carbon;
use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;

class HistoryData extends BaseDataObject
{
    public function __construct(
        public string $date,
        public string $time,
        public string $description,
    ) {
    }
}
