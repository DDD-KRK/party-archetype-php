<?php
declare(strict_types=1);

namespace Archetype\Quantity;

class Metric
{
    //todo symbol&description optional?
    public function __construct(private string $name, private string $symbol, private string $description)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
