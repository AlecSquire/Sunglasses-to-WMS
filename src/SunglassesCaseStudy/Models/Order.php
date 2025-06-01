<?php

namespace SunglassesCaseStudy\Models;

use SunglassesCaseStudy\Models\BaseOrder;
use SunglassesCaseStudy\Models\Address;
use SunglassesCaseStudy\Models\LineItem;


class Order extends BaseOrder
{
    /**
     * @param  LineItem[]  $line_items
     */
    public function __construct(
        public string $order_number,
        string $title,
        string $currency,
        public Address $shippingAddress,
        float $total,
        public array $line_items
    ) {
        parent::__construct($title, $currency, $total);
    }
}
