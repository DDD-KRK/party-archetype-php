<?php

declare(strict_types=1);

namespace Archetype\Party\Tests\Preference;

use Archetype\ISOGender;
use Archetype\PartyIdentifier;
use Archetype\Person;
use Archetype\PersonName;
use Archetype\Preference\Preference;
use Archetype\Preference\PreferenceOption;
use Archetype\Preference\PreferenceType;
use Archetype\UniqueIdentifier;
use PHPUnit\Framework\TestCase;

class PreferenceTest extends TestCase
{
    public function testExample(): void
    {
        $economyClassMealPreferenceType = $this->getEconomyClassMealPreferenceType();
        $economyClassSomePreferenceType = $this->getEconomyClassSomePreferenceType();

        $party = new Person(new PartyIdentifier('UUID'), new PersonName('a name'), ISOGender::NOT_SPECIFIED);

        $party->addPreference(new Preference($economyClassMealPreferenceType, $economyClassMealPreferenceType->getOptions()[0]));
        $party->addPreference(new Preference($economyClassSomePreferenceType, $economyClassSomePreferenceType->getOptions()[0]));

        $economyClassPreferences = $party->getPreferencesFor($this->getEconomyClassIdentifier());

        $this->assertCount(1, $economyClassPreferences);
        $this->assertCount(2, $party->getPreferences());
    }

    public function getEconomyClassIdentifier(): UniqueIdentifier
    {
        return new UniqueIdentifier('economy class preferences');
    }

    public function getEconomyClassSomePreferenceType(): PreferenceType
    {
        return new PreferenceType(
            'a preference',
            'another economy class related preference',
            [
                new PreferenceOption('A', '...'),
                new PreferenceOption('B', '...'),
                new PreferenceOption('C', '...'),
            ],
//            $this->getEconomyClassIdentifier()
        );
    }

    public function getEconomyClassMealPreferenceType(): PreferenceType
    {
        return new PreferenceType(
            'economy class meal',
            'options for an economy class meal',
            [
                new PreferenceOption('asian vegetarian', '...'),
                new PreferenceOption('lacto ovo vegetarian', '...'),
                new PreferenceOption('diabetic', '...'),
            ],
            $this->getEconomyClassIdentifier()
        );
    }
}