<?php

namespace Archetype\Address;

class EmailAddress extends Address
{
    private string $emailAddress;

    public function __construct(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function getAddress(): string
    {
        return $this->emailAddress;
    }
}
