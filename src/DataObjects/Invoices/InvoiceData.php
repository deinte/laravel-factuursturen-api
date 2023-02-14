<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Invoices;

use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Transformers\ArrayableTransformer;

class InvoiceData extends BaseDataObject
{
    public function __construct(
        public int $id,
        public string $invoicenr,
        public string $invoicenr_full,
        public array $taxes,
        #[WithTransformer(ArrayableTransformer::class)]
        public ReferenceData $reference,
    ) {
    }
}
