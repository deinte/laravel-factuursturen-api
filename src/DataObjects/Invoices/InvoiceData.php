<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Invoices;

use Carbon\Carbon;
use Deinte\LaravelFactuurSturenApi\Casts\NullableDateTimeInterfaceCast;
use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;
use Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\Support\HistoryData;
use Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\Support\ReferenceData;
use Deinte\LaravelFactuurSturenApi\DataObjects\Invoices\Support\TaxData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Transformers\ArrayableTransformer;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class InvoiceData extends BaseDataObject
{
    public function __construct(
        #[WithTransformer(ArrayableTransformer::class)]
        public ReferenceData|null $reference = null,
        #[WithTransformer(ArrayableTransformer::class)]
        public InvoiceLineData|null $lines = null,
        public int|null $profile = null,
        public string|null $paymentcondition = null,
        public int|null $paymentperiod = null,
        public string|null $paymentmethod = null,
        #[DataCollectionOf(TaxData::class)]
        public DataCollection|null $taxes = null,
        public float|null $tax = null,
        public float|null $totalintax = null,
        public string|null $tax_type = null,
        public string|null $language = null,
        public bool|null $tax_shifted = null,
        public int|null $clientnr = null,
        public string|null $contact = null,
        public string|null $company = null,
        public string|null $address = null,
        public string|null $zipcode = null,
        public string|null $city = null,
        public string|null $country = null,
        public string|null $phone = null,
        public string|null $mobile = null,
        public string|null $invoicenote = null,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $sent = null,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $uncollectible = null,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $lastreminder = null,
        public float|null $open = null,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $paiddate = null,
        public string|null $payment_url = null,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $duedate = null,
        #[DataCollectionOf(HistoryData::class)]
        public DataCollection|null $history = null,
        public string|null $invoicenr = null,
        public string|null $action = null,
        public int|null $category = null,
        public float|null $discount = null,
        public string|null $discounttype = null,
        public string $sendmethod = 'mail',
    ) {
    }

    public function clone(string $action = 'send', array $properties = []): self
    {
        $clone = new self();
        $clone->action = $action;
        $clone->lines = $this->lines;
        $clone->reference = $this->reference;
        $clone->clientnr = $this->clientnr;


        return $clone;
    }
}
