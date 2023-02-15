<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Normalizers\ArrayableNormalizer;
use Spatie\LaravelData\Normalizers\ArrayNormalizer;
use Spatie\LaravelData\Normalizers\JsonNormalizer;
use Spatie\LaravelData\Normalizers\ModelNormalizer;
use Spatie\LaravelData\Normalizers\ObjectNormalizer;

class BaseDataObject extends Data
{
    public static function normalizers(): array
    {
        return [
            ArrayableNormalizer::class,
            ObjectNormalizer::class,
            ModelNormalizer::class,
            ArrayNormalizer::class,
            JsonNormalizer::class,
        ];
    }

    public function toRequest(): array
    {
        return array_filter($this->toArray());
    }
}
