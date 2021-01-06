<?php

namespace Lichess;

use GuzzleHttp\Client;
use Lichess\Hydrator\ArenaTournamentHydrator;
use Lichess\Service\ArenaTournamentProvider;
use PHydrator\Hydrator\DateTimeHydrator;
use PHydrator\PHydrator;

class Lichess
{
    private Client $client;
    public ArenaTournamentProvider $arenaTournaments;
    private PHydrator $pHydrator;

    public function __construct()
    {
    	$this->initHydrators();
        $this->client = new Client(['base_uri' => 'https://lichess.org/api/']);
        $this->arenaTournaments = new ArenaTournamentProvider($this);
    }

	public function getClient(): Client
	{
		return $this->client;
	}

	public function getHydrator(): PHydrator
	{
		return $this->pHydrator;
	}

    private function initHydrators(): void
    {
	    $this->pHydrator = new PHydrator();
	    $this->pHydrator->registerHydrator(DateTimeHydrator::class); // @todo: auto register in pHydrator library
	    $this->pHydrator->registerHydrator(ArenaTournamentHydrator::class);
    }
}
