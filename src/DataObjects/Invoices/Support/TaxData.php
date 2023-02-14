<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\Support;

use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;

class TaxData extends BaseDataObject
{
    public function __construct(
        public int $rate,
        public float $sum,
        public float $sum_of
    ) {
    }
}
