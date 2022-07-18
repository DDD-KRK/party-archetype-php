<?php

namespace Archetype\Address;

class Locale
{
    private string $identifier;
    private string $name;
    private ?string $description;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
