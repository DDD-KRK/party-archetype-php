<?php

declare(strict_types=1);

namespace Archetype\Address;

use DateTime;

abstract class Address
{
    protected ?DateTime $validFrom;
    protected ?DateTime $validTo;
    protected AddressProperties $addressProperties;

    public function getValidFrom(): ?DateTime
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?DateTime
    {
        return $this->validTo;
    }

    public function getAddressProperties(): AddressProperties
    {
        return $this->addressProperties;
    }

    abstract public function getAddress(): string;
}
