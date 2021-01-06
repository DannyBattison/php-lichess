<?php

namespace Lichess\Hydrator;

use Lichess\Entity\ArenaTournament;
use PHydrator\AbstractHydrator;

class ArenaTournamentHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = ArenaTournament::class;
}
