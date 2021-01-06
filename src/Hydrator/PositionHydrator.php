<?php

namespace Lichess\Hydrator;

use Lichess\Entity\Position;
use PHydrator\AbstractHydrator;

class PositionHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = Position::class;
}
