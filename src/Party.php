<?php

declare(strict_types=1);

namespace Archetype;

use Archetype\Address\Address;
use Archetype\Party\PartyInterface;
use Archetype\Preference\Preference;

abstract class Party implements PartyInterface
{
    /**
     * @param PartyIdentifier $partyIdentifier
     * @param Preference[] $preferences
     * @param RegisteredIdentifier[] $registeredIdentifiers
     * @param Address[] $addresses
     */
    public function __construct(
        private PartyIdentifier $partyIdentifier,
        private array $preferences = [],
        private array $registeredIdentifiers = [],
        private array $addresses = []
    ){}

    public function getIdentifier(): PartyIdentifier
    {
        return $this->partyIdentifier;
    }

    /**
     * @return RegisteredIdentifier[]
     */
    public function getRegisteredIdentifiers(): array
    {
        return $this->registeredIdentifiers;
    }

    abstract public function getName(): string;

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
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
        return $this->preferences;
    }

    public function addPreference(Preference $preference): void
    {
        $this->preferences[] = $preference;
    }

    /**
     * @return Preference[]
     */
    public function getPreferencesFor(UniqueIdentifier $preferenceTypeIdentifier): array
    {
        return array_filter(
            $this->preferences,
            fn(Preference $preference) => $preference->getType()->getUniqueIdentifierForThing()?->getIdentifier() === $preferenceTypeIdentifier->getIdentifier()
        );
    }
}
