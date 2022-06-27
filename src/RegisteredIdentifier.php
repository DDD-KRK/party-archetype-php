<?php

declare(strict_types=1);

namespace Archetype;

class RegisteredIdentifier
{
    private string $identifier;
    private string $type;
    private \DateTimeImmutable $validFrom;
    private \DateTimeImmutable $validTo;
    private string $registrationAuthority;
}