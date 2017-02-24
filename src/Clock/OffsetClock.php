<?php

declare(strict_types=1);

namespace Brick\DateTime\Clock;

use Brick\DateTime\Duration;
use Brick\DateTime\Instant;

/**
 * This clock adds an offset to an underlying clock.
 */
class OffsetClock extends Clock
{
    /**
     * The reference clock.
     *
     * @var Clock
     */
    private $default;

    /**
     * The offset to apply to the clock.
     *
     * @var Duration
     */
    private $offset;

    /**
     * Class constructor.
     *
     * @param Clock    $clock  The reference clock.
     * @param Duration $offset The offset to apply to the clock.
     */
    public function __construct(Clock $clock, Duration $offset)
    {
        $this->default  = $clock;
        $this->offset = $offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getTime() : Instant
    {
        return $this->default->getTime()->plus($this->offset);
    }
}
