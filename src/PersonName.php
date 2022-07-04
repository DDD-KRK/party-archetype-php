<?php

declare(strict_types=1);

namespace Archetype;

use DateTime;

class PersonName
{
    private string $familyName;

    public function __construct(
        string $familyName,
        DateTime $validFrom = null,
        DateTime $validTo = null
    ) {
        $this->familyName = $familyName;
    }

    public function getFamilyName(): string
    {
        return $this->familyName;
    }
}