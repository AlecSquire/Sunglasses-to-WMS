<?php
namespace SunglassesCaseStudy\Models;

class Address
{
    public function __construct(
        public string $address1,
        public string $town,
        public string $city,
        public string $country_code,
        public string $zip
    ) {}
}
