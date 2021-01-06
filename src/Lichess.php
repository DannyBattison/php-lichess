<?php

namespace Lichess;

use GuzzleHttp\Client;
use Lichess\Hydrator\ArenaTournamentHydrator;
use Lichess\Hydrator\PerfHydrator;
use Lichess\Hydrator\PositionHydrator;
use Lichess\Hydrator\ScheduleHydrator;
use Lichess\Hydrator\VariantHydrator;
use Lichess\Hydrator\WinnerHydrator;
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
	    $this->pHydrator->registerHydrator(PerfHydrator::class);
	    $this->pHydrator->registerHydrator(PositionHydrator::class);
	    $this->pHydrator->registerHydrator(ScheduleHydrator::class);
	    $this->pHydrator->registerHydrator(VariantHydrator::class);
	    $this->pHydrator->registerHydrator(WinnerHydrator::class);
    }
}
