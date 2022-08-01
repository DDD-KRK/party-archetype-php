<?php

declare(strict_types=1);

namespace Archetype;

class PartyManager
{
    /**
     * @var array[PartyIdentifier => Party]
     */
    private array $parties = [];

    public function addParty(Party $party): void
    {
        $this->parties[$party->getIdentifier()->getIdentifier()] = $party;
    }

    public function deleteParty(PartyIdentifier $partyIdentifier): bool
    {
        unset($this->parties[$partyIdentifier->getIdentifier()]);

        return true;
    }

    public function findPartyByPartyIdentifier(PartyIdentifier $partyIdentifier): ?Party
    {
        return array_key_exists($partyIdentifier->getIdentifier(), $this->parties)
            ? $this->parties[$partyIdentifier->getIdentifier()]
            : null;
    }

    public function findPartyByName(string $name): ?Party
    {
        return null;
    }
}