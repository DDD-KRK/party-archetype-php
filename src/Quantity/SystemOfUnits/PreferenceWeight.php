<?php

declare(strict_types=1);

namespace Archetype\Quantity\SystemOfUnits;

use Archetype\Quantity\Metric;

//todo extend Unit
class PreferenceWeight extends Metric
{
    public function __construct()
    {
        parent::__construct('weight', '', '');
    }
}
