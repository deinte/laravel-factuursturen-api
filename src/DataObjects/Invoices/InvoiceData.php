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
        public string $invoicenr,
        #[WithTransformer(ArrayableTransformer::class)]
        public ReferenceData $reference,
        #[WithTransformer(ArrayableTransformer::class)]
        public InvoiceLineData $lines,
        public int $profile,
        public int $category,
        public string $discounttype,
        public float $discount,
        public string $paymentcondition,
        public int $paymentperiod,
        public string|null $paymentmethod,
        #[DataCollectionOf(TaxData::class)]
        public DataCollection $taxes,
        public float $tax,
        public float $totalintax,
        public string $tax_type,
        public string $language,
        public bool $tax_shifted,
        public int $clientnr,
        public string $contact,
        public string $company,
        public string $address,
        public string $zipcode,
        public string $city,
        public string $country,
        public string $phone,
        public string $mobile,
        public string $invoicenote,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $sent,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $uncollectible,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $lastreminder,
        public float $open,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $paiddate,
        public string $payment_url,
        #[WithCast(NullableDateTimeInterfaceCast::class, format: 'Y-m-d')]
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon|null $duedate,
        #[DataCollectionOf(HistoryData::class)]
        public DataCollection $history,
    ) {
    }
}
