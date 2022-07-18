<?php

declare(strict_types=1);

namespace Archetype;

class RegisteredIdentifier
{
    public function __construct(
        private readonly string $identifier,
        private readonly RegisteredIdentifierType $type,
        private readonly \DateTimeImmutable $validFrom,
        private readonly \DateTimeImmutable $validTo,
        private readonly string $registrationAuthority
    ) {}

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getType(): RegisteredIdentifierType
    {
        return $this->type;
    }

    public function getValidFrom(): \DateTimeImmutable
    {
        return $this->validFrom;
    }

    public function getValidTo(): \DateTimeImmutable
    {
        return $this->validTo;
    }

    public function getRegistrationAuthority(): string
    {
        return $this->registrationAuthority;
    }
}