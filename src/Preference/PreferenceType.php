<?php

declare(strict_types=1);

namespace Archetype\Preference;

use Archetype\UniqueIdentifier;
use Webmozart\Assert\Assert;

class PreferenceType
{
    /** @param PreferenceOption[] $options */
    public function __construct(
        private string $name,
        private string $description,
        private array $options,
        private ?UniqueIdentifier $uniqueIdentifier = null
    ) {
        Assert::allIsInstanceOf($options, PreferenceOption::class);
        Assert::greaterThanEq($options, 1);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /** @return PreferenceOption[] */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function getUniqueIdentifierForThing(): ?UniqueIdentifier
    {
        return $this->uniqueIdentifier;
    }
}