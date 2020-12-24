<?php

namespace Lichess;

use GuzzleHttp\Client;
use Lichess\Service\TournamentProvider;

class Lichess
{
    private Client $client;
    public TournamentProvider $tournaments;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://lichess.org/api/']);
        $this->tournaments = new TournamentProvider($this->client);
    }
}
