<?php

declare(strict_types=1);

namespace Archetype\Quantity;

class Quantity
{
    public function __construct(private float $amount, private Metric $metric)
    {
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getMetric(): Metric
    {
        return $this->metric;
    }
}
