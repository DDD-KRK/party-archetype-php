<?php

declare(strict_types=1);

namespace Archetype;

class Person extends Party
{
    private PersonName $personName;
    private array $otherPersonNames;

    public function __construct(PersonName $personName, PersonName ...$otherPersonNames)
    {
        $this->personName = $personName;
        $this->otherPersonNames = $otherPersonNames;
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
}