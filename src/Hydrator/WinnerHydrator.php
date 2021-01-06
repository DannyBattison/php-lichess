<?php

namespace Lichess\Hydrator;

use Lichess\Entity\Winner;
use PHydrator\AbstractHydrator;

class WinnerHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = Winner::class;
}
