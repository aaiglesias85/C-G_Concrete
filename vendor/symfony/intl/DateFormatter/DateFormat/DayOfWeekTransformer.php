<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Intl\DateFormatter\DateFormat;

/**
 * Parser and formatter for day of week format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 *
 * @deprecated since Symfony 5.3, use symfony/polyfill-intl-icu ^1.21 instead
 */
class DayOfWeekTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\DateTime $dateTime, int $length): string
    {
        $dayOfWeek = $dateTime->format('l');
        switch ($length) {
            case 4:
                return $dayOfWeek;
            case 5:
                return $dayOfWeek[0];
            case 6:
                return substr($dayOfWeek, 0, 2);
            default:
                return substr($dayOfWeek, 0, 3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int $length): string
    {
        switch ($length) {
            case 4:
                return 'Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday';
            case 5:
                return '[MTWFS]';
            case 6:
                return 'Mo|Tu|We|Th|Fr|Sa|Su';
            default:
                return 'Mon|Tue|Wed|Thu|Fri|Sat|Sun';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string $matched, int $length): array
    {
        return [];
    }
}
