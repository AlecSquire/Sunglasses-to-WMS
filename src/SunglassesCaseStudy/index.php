<?php
require_once './../../vendor/autoload.php';

use SunglassesCaseStudy\Collections\OrderList;
use SunglassesCaseStudy\Contracts\GetTitle;
use SunglassesCaseStudy\Models\Order;
use SunglassesCaseStudy\Utils\ParseOrder;


$json = file_get_contents(__DIR__ . '/Json/order.json');
if ($json === false) {
    throw new RuntimeException('You plonker... No order.json');
}
$parser = new ParseOrder();
$order = $parser->parse($json);
$orderList = new OrderList;
$orderList->storeList($order);

print_r($orderList->returnList());
