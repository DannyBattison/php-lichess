<?php

namespace Lichess\Hydrator;

use Lichess\Entity\ArenaTournament;

/**
 * @method hydrateOne(object $data): ArenaTournament
 */
class ArenaTournamentHydrator extends AbstractHydrator
{
    protected static string $entityClass = ArenaTournament::class;
}