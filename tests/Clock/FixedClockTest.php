<?php

declare(strict_types=1);

namespace Brick\DateTime\Tests\Clock;

use Brick\DateTime\Tests\AbstractTestCase;
use Brick\DateTime\Clock\FixedClock;
use Brick\DateTime\Instant;

/**
 * Unit tests for class FixedClock.
 */
class FixedClockTest extends AbstractTestCase
{
    public function testFixedClock()
    {
        $clock = new FixedClock(Instant::of(123456789, 987654321));
        $this->assertInstantIs(123456789, 987654321, $clock->getTime());
    }
}
