<?php

declare(strict_types=1);

namespace Archetype;

use Archetype\Common\NameInterface;
use DateTime;

class OrganizationName implements NameInterface
{
    private string $name;
    private ?string $use;
    private ?DateTime $validFrom;
    private ?DateTime $validTo;

    public function __construct(string $name, string $use = null, DateTime $validFrom = null, DateTime $validTo = null)
    {
        $this->name = $name;
        $this->use = $use;
        $this->validFrom = $validFrom;
        $this->validTo = $validTo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUse(): ?string
    {
        return $this->use;
    }

    public function getValidFrom(): ?DateTime
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?DateTime
    {
        return $this->validTo;
    }
}
