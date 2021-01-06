<?php

namespace Lichess\Service;

use Lichess\Entity\ArenaTournament;
use Lichess\Lichess;

class ArenaTournamentProvider
{
    private Lichess $lichess;

    public function __construct(Lichess $lichess)
    {
        $this->lichess = $lichess;
    }

    public function getTournament(string $id): ArenaTournament
    {
        $response = $this->lichess->getClient()->get('tournament/' . $id);
        /** @var ArenaTournament $arenaTournament */
		$arenaTournament = $this->lichess->getHydrator()->hydrateOne(ArenaTournament::class, json_decode($response->getBody()->getContents(), true));

		return $arenaTournament;
    }
}
