<?php
namespace SunglassesCaseStudy\Utils;

use SunglassesCaseStudy\Models\Order;
use SunglassesCaseStudy\Models\Address;
use SunglassesCaseStudy\Models\LineItem;

class ParseOrder
{
    public function parse(string $json): Order
    {
        $order_data = json_decode($json, true);

        $address = new Address(
            $order_data['shippingAddress']['address1'],
            $order_data['shippingAddress']['town'],
            $order_data['shippingAddress']['city'],
            $order_data['shippingAddress']['country_code'],
            $order_data['shippingAddress']['zip']
        );

        $items = array_map(fn ($item) => new LineItem(
            $item['sku'],
            $item['title'],
            $item['quantity'],
            $item['price'],
            $item['total']
        ), $order_data['line_items']);

        return new Order(
            $order_data['order_number'],
            $order_data['title'],
            $order_data['currency'],
            $address,
            $order_data['total'],
            $items
        );
    }
}
