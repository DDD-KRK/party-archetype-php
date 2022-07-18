<?php

declare(strict_types=1);

namespace Archetype;

class PartySignature
{
    public function __construct(
        private readonly PartyIdentifier $partyIdentifier,
        private readonly \DateTimeImmutable $when,
        private readonly ?string $reason = null,
        private readonly ?PartyAuthentication $partyAuthentication = null
    ) {}

    public function getPartyIdentifier(): PartyIdentifier
    {
        return $this->partyIdentifier;
    }

    public function getAuthentication(): ?PartyAuthentication
    {
        return $this->partyAuthentication;
    }

    public function getWhen(): \DateTimeImmutable
    {
        return $this->when;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }
}