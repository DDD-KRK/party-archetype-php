<?php

declare(strict_types=1);

namespace Archetype\Address;

use DateTime;

abstract class Address
{
    protected ?DateTime $validFrom;
    protected ?DateTime $validTo;

    abstract public function getAddress(): string;
}
