<?php

declare(strict_types=1);

namespace Archetype;

class Person extends Party
{
    private PersonName $personName;
    private array $otherPersonNames;
    private ISOGender $isoGender;

    public function __construct(PersonName $personName, ISOGender $isoGender, PersonName ...$otherPersonNames)
    {
        $this->personName = $personName;
        $this->otherPersonNames = $otherPersonNames;
        $this->isoGender = $isoGender;
    }

    public function getPersonName(): PersonName
    {
        return $this->personName;
    }

    public function getName(): string
    {
        return $this->personName->getFamilyName();
    }

    /**
     * @return PersonName[]
     */
    public function getOtherPersonNames(): array
    {
        return $this->otherPersonNames;
    }

    public function getIsoGender(): ISOGender
    {
        return $this->isoGender;
    }
}