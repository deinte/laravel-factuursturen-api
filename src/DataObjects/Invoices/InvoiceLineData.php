<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Invoices;

use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;

class InvoiceLineData extends BaseDataObject
{
    public function __construct(
        public float $amount,
        public float $price,
        public string|null $amount_desc,
        public string|null $description,
        public float|null $tax_rate,
        public float|null $discount_pct,
        public float|null $linetotal,
    ) {
    }
}
