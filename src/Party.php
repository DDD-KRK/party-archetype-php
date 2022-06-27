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
    private NameInterface $name;
    private array $addresses;
    private array $roles;
//    public function __construct(PartyIdentifierInterface $partyIdentifier, NameInterface $name, array $addresses, array $registeredIdentifiers = array(), array $roles = array(), array $preferences = array()){
//        $this->partyIdentifier = $partyIdentifier;
//
//    }

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

    public function getName(): string
    {
        return $this->name->getName();
    }

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
