<?php
namespace SunglassesCaseStudy\Collections;

use SunglassesCaseStudy\Models\Order;

// 5. Create a new class to store a list of ORDERs. Implement a public method to return the list.
class OrderList
{
    /**
     * @var Order[]
     */
    protected array $orders = [];

    public function storeList(Order $order): void
    {
        $this->orders[] = $order;
    }

    /**
     * @return Order[]
     */
    public function returnList(): array
    {
        return $this->orders;
    }
}
