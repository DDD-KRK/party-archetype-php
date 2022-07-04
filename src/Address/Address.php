<?php

declare(strict_types=1);

namespace Archetype\Address;

use DateTime;

abstract class Address
{
    private ?DateTime $validFrom;
    private ?DateTime $validTo;

    abstract public function getAddress(): string;
}
