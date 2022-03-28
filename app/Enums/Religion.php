<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Islam()
 * @method static static Kristen()
 * @method static static Katolik()
 * @method static static Hindu()
 * @method static static Buddha()
 * @method static static Khonghucu()
 */
final class Religion extends Enum
{
    const Islam =       'islam';
    const Kristen =     'kristen';
    const Katolik =     'katolik';
    const Hindu =       'hindu';
    const Buddha =      'buddha';
    const Khonghucu =   'khonghucu';
}
