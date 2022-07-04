<?php

declare(strict_types=1);

namespace Archetype;

enum ISOGender: string {
    case MALE = 'male';
    case FEMALE = 'female';
    case NOT_KNOWN = 'not known';
    case NOT_SPECIFIED = 'not specified';
}