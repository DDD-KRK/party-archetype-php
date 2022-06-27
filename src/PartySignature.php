<?php

declare(strict_types=1);

namespace Archetype;

class PartySignature
{
    private \DateTimeImmutable $when;
    private string $reason;

    private PartyIdentifier $partyIdentifier;
    private PartyAuthentication $partyAuthentication;

    public function __construct(PartyIdentifier $partyIdentifier, PartyAuthentication $partyAuthentication, \DateTimeImmutable $when, string $reason = ""){
        $this->partyIdentifier = $partyIdentifier;
        $this->partyAuthentication = $partyAuthentication;
    }

    public function getPartyIdentifier() : PartyIdentifier
    {
        return $this->partyIdentifier;
    }

    public function getAuthentication() : PartyAuthentication
    {
        return $this->partyAuthentication;
    }
}