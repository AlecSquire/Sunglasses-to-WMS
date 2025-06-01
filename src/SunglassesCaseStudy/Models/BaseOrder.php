<?php

namespace SunglassesCaseStudy\Models;

use SunglassesCaseStudy\Contracts\GetTitle;


class BaseOrder implements GetTitle
{
    public function __construct(public string $title, public string $currency, public float $total) {}

    public function getTitle(): string
    {
        return $this->title;
    }
}
