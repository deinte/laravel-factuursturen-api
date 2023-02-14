<?php

namespace Deinte\LaravelFactuurSturenApi\Casts;

use DateTimeInterface;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Casts\Uncastable;
use Spatie\LaravelData\Support\DataProperty;

class NullableDateTimeInterfaceCast implements Cast
{
    public function __construct(
        protected null|string|array $format = null,
        protected ?string $type = null,
        protected ?string $setTimeZone = null,
        protected ?string $timeZone = null
    ) {
    }

    public function cast(DataProperty $property, mixed $value, array $context): DateTimeInterface|null|Uncastable
    {
        if (empty($value)) {
            return null;
        }

        $parent = new DateTimeInterfaceCast($this->format, $this->type, $this->setTimeZone, $this->timeZone);

        return $parent->cast($property, $value, $context);
    }
}
