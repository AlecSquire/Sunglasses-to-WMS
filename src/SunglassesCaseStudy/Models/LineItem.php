<?php

namespace SunglassesCaseStudy\Models;

class LineItem
{
    public function __construct(
        public string $sku,
        public string $title,
        public int $quantity,
        public float $price,
        public float $total
    ) {}
}
