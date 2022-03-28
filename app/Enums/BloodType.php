<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static A()
 * @method static static B()
 * @method static static AB()
 * @method static static O()
 */
final class BloodType extends Enum
{
    const A =   'a';
    const B =   'b';
    const AB =  'ab';
    const O =   'o';
}
