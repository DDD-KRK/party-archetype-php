<?php

namespace Archetype\Address;

class IsoCountryCode extends Locale
{
    private ?string $alphabeticThreeCharacterCode;
    private ?string $numericCode;
    private ?string $officialName;

    public function getAlphabeticThreeCharacterCode(): ?string
    {
        return $this->alphabeticThreeCharacterCode;
    }

    public function getNumericCode(): ?string
    {
        return $this->numericCode;
    }

    public function getOfficialName(): ?string
    {
        return $this->officialName;
    }

    public function getShortName(): string
    {
        return $this->getName();
    }

    public function getAlphabeticTwoCharacterCode(): string
    {
        return $this->getIdentifier();
    }
}
