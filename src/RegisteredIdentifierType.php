<?php

declare(strict_types=1);

namespace Archetype;

enum RegisteredIdentifierType: string
{
    case NIP = 'NIP';
    case PESEL = 'PESEL';
    case VAT = 'VAT';
}