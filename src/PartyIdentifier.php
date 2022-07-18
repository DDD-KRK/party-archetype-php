<?php

declare(strict_types=1);

namespace Archetype;

class PartyIdentifier
{
    public function __construct(private string $identifier)
    {
    }

    public function getIdentifier() : string
    {
        return $this->identifier;
    }
}