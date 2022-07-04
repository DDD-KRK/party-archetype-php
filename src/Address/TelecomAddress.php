<?php

namespace Archetype\Address;

class TelecomAddress extends Address
{
    private string $countryCode;
    private string $nationalDirectDialingPrefix;
    private string $areaCode;
    private string $number;
    private string $extension;
    private string $physicalType;

    public function __construct(
        string $countryCode,
        string $nationalDirectDialingPrefix,
        string $areaCode,
        string $number,
        string $extension,
        string $physicalType
    ) {

        $this->countryCode = $countryCode;
        $this->nationalDirectDialingPrefix = $nationalDirectDialingPrefix;
        $this->areaCode = $areaCode;
        $this->number = $number;
        $this->extension = $extension;
        $this->physicalType = $physicalType;
    }

    public function getAddress(): string
    {
        //todo format
        return sprintf(
            '%s (%s) %s %s ext. %s',
            $this->countryCode,
            $this->nationalDirectDialingPrefix,
            $this->areaCode,
            $this->number,
            $this->extension
        );
    }

    public function getPhysicalType(): string
    {
        return $this->physicalType;
    }
}
