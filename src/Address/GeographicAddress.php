<?php

namespace Archetype\Address;

use Webmozart\Assert\Assert;

class GeographicAddress extends Address
{
    /** @var string[] */
    private array $addressLine;
    private string $city;
    private string $regionOrState;
    private string $zipOrPostCode;
    private Locale $country;

    public function __construct(
        array  $addressLine,
        string $city,
        string $regionOrState,
        string $zipOrPostCode,
        Locale $country
    )
    {
        Assert::minCount($addressLine, 1);
        $this->addressLine = $addressLine;
        $this->city = $city;
        $this->regionOrState = $regionOrState;
        $this->zipOrPostCode = $zipOrPostCode;
        $this->country = $country;
    }


    public function getAddress(): string
    {
        //todo reformat
        return sprintf(
            '%s %s %s %s %s',
            implode(',', $this->addressLine),
            $this->city,
            $this->regionOrState,
            $this->zipOrPostCode,
            $this->country->getName()
        );
    }

    public function getCountry(): Locale
    {
        return $this->country;
    }
}