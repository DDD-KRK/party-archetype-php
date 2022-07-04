<?php

namespace Archetype\Address;

class WebPageAddress extends Address
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getAddress(): string
    {
        return $this->url;
    }
}