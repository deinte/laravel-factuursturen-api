<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Invoices;

use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;

class ReferenceData extends BaseDataObject
{
    public function __construct(
        public string $line1,
        public string $line2,
        public string $line3,
    ) {
    }
}
