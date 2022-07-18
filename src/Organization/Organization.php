<?php

declare(strict_types=1);

namespace Archetype\Party\Organization;

use Archetype\OrganizationName;
use Archetype\Party;

class Organization extends Party
{
    private OrganizationName $organizationName;
    private array $otherOrganizationNames;

    public function __construct(OrganizationName $organizationName, OrganizationName ...$otherOrganizationNames)
    {
        parent::__construct();
        $this->organizationName = $organizationName;
        $this->otherOrganizationNames = $otherOrganizationNames;
    }

    public function getOrganizationName(): OrganizationName
    {
        return $this->organizationName;
    }

    /**
     * @return OrganizationName[]
     */
    public function getOtherOrganizationNames(): array
    {
        return $this->otherOrganizationNames;
    }

    public function getName(): string
    {
        return $this->organizationName->getName();
    }
}