<?php

namespace Brick\DateTime\Field;

use Brick\DateTime\DateTimeException;

/**
 * The hour part of the time-zone offset.
 */
class TimeZoneOffsetHour
{
    /**
     * The field name.
     */
    const NAME = 'time-zone-offset-hour';

    /**
     * The regular expression pattern of the ISO 8601 representation.
     */
    const PATTERN = HourOfDay::PATTERN;

    /**
     * @param int $offsetHour The offset-hour to check.
     *
     * @return void
     *
     * @throws DateTimeException If the offset-hour is not valid.
     */
    public static function check(int $offsetHour)
    {
        if ($offsetHour < -18 || $offsetHour > 18) {
            throw DateTimeException::fieldNotInRange(self::NAME, $offsetHour, -18, 18);
        }
    }
}
