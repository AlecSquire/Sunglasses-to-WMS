<?php

namespace SunglassesCaseStudy\Models;
// 3. create a class for PURCHASE_ORDER and it contains the same
// **title**, **currency** and **total**
//  fields as ORDER, how would you optimise both classes? abastract|trait???
class PurchaseOrder extends BaseOrder
{
    public function __construct(
        string $title,
        string $currency,
        float $total,
    ) {
        parent::__construct($title, $currency, $total);
    }
}
