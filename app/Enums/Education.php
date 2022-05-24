<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Attributes\Description;

/**
 * @method static static SD()
 * @method static static SMP()
 * @method static static SMA_SMK()
 * @method static static D3()
 * @method static static S1()
 * @method static static S2()
 */
final class Education extends Enum
{
    const SD =      1;
    const SMP =     2;
    #[Description('SMA/SMK')]
    const SMA_SMK = 3;
    const D3 =      4;
    const S1 =      5;
    const S2 =      6;
}
