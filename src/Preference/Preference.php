<?php

declare(strict_types=1);

namespace Archetype\Preference;

use Archetype\Quantity\Quantity;
use Archetype\Quantity\SystemOfUnits\PreferenceWeight;
use Webmozart\Assert\Assert;

class Preference
{
    public function __construct(
        private PreferenceType $preferenceType,
        private PreferenceOption $preferenceOption,
        private Quantity $preferenceWeight = new Quantity(1.0, new PreferenceWeight())
        // todo czy na pewno quantity? quantity to liczba plus metryka -- pisał coś o opcjonalnym Metric::symbol&description
    )
    {
        Assert::inArray($this->preferenceOption, $this->preferenceType->getOptions());
    }

    public function getType(): PreferenceType
    {
        return $this->preferenceType;
    }

    public function getOptionName(): string
    {
        return $this->preferenceOption->getName();
    }

    public function getOptionDescription(): string
    {
        return $this->preferenceOption->getDescription();
    }

    public function getPreferenceWeight(): Quantity
    {
        return $this->preferenceWeight;
    }
}
