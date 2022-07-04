<?php

declare(strict_types=1);

namespace Archetype;

use Archetype\Common\NameInterface;
use Archetype\Common\RegisteredIdentifierInterface;
use Archetype\Party\PartyIdentifierInterface;
use Archetype\Party\PartyInterface;

abstract class Party implements PartyInterface
{
    private PartyIdentifierInterface $partyIdentifier;
    private array $addresses;
    private array $roles;

    public function getIdentifier(): PartyIdentifierInterface
    {
        return $this->partyIdentifier;
    }

    /**
     * @return RegisteredIdentifierInterface[]
     */
    public function getRegisteredIdentifiers(): array
    {
        return [];
    }

    abstract public function getName(): string;

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return [];
    }

    /**
     * @return PartyRole[]
     */
    public function getRoles(): array
    {
        return [];
    }

    /**
     * @return Preference[]
     */
    public function getPreferences(): array
    {
        return [];
    }
}
