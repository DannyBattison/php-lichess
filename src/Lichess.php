<?php

namespace Lichess;

use GuzzleHttp\Client;
use Lichess\Service\ArenaTournamentProvider;

class Lichess
{
    private Client $client;
    public ArenaTournamentProvider $arenaTournaments;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://lichess.org/api/']);
        $this->arenaTournaments = new ArenaTournamentProvider($this->client);
    }
}
