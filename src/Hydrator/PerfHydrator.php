<?php

namespace Lichess\Hydrator;

use Lichess\Entity\Perf;
use PHydrator\AbstractHydrator;

class PerfHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = Perf::class;
}
