<?php

namespace Lichess\Hydrator;

use Lichess\Entity\Clock;
use PHydrator\AbstractHydrator;

class ClockHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = Clock::class;
}
