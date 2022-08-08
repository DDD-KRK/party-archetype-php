<?php

declare(strict_types=1);

namespace Archetype;

class PartyManager
{
    /**
     * @var array[PartyIdentifier => Party]
     */
    private array $parties = [];

    public function addParty(Party $party): PartyManager
    {
        $this->parties[$party->getIdentifier()->getIdentifier()] = $party;

        return $this;
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

    /**
     * @param string $name
     * @return Party[]
     */
    public function findPartyByName(string $name): array
    {
        return array_values(
            array_filter(
                $this->parties,
                function(Party $party) use ($name) {
                    return $party->getName() === $name;
                },
                ARRAY_FILTER_USE_BOTH
            )
        );
    }
}