<?php

declare(strict_types=1);

namespace Archetype\Organization;

use Archetype\OrganizationName;
use Archetype\Party;
use Archetype\PartyIdentifier;

class Organization extends Party
{
    private OrganizationName $organizationName;
    private array $otherOrganizationNames;

    public function __construct(
        PartyIdentifier $partyIdentifier,
        OrganizationName $organizationName,
        array $otherOrganizationNames = [],
        array $preferences = [],
        array $registeredIdentifiers = [],
        array $addresses = []
    ) {
        parent::__construct($partyIdentifier, $preferences, $registeredIdentifiers, $addresses);
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