<?php

declare(strict_types=1);

namespace Archetype;

use Archetype\Common\NameInterface;

class OrganizationName implements NameInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
