<?php

namespace Deinte\LaravelFactuurSturenApi\DataObjects\Categories;

use Deinte\LaravelFactuurSturenApi\DataObjects\BaseDataObject;

class CategoriesData extends BaseDataObject
{
    public function __construct(
        public int $id,
        public string $name,
        public int|bool $ledger,
    ) {
    }
}
