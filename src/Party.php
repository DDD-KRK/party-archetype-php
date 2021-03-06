<?php

declare(strict_types=1);

namespace Archetype;

use Archetype\Address\Address;
use Archetype\Common\RegisteredIdentifierInterface;
use Archetype\Party\PartyIdentifierInterface;
use Archetype\Party\PartyInterface;
use Archetype\Preference\Preference;
use ArrayObject;

abstract class Party implements PartyInterface
{
    private PartyIdentifierInterface $partyIdentifier;
    private array $addresses;
    private array $roles;

    /** @param Preference[] $preferences */
    public function __construct(private array $preferences = [])
    {
    }

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
