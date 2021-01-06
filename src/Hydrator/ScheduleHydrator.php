<?php

namespace Lichess\Hydrator;

use Lichess\Entity\Schedule;
use PHydrator\AbstractHydrator;

class ScheduleHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = Schedule::class;
}
