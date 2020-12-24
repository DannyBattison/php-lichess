<?php

namespace Lichess\Service;

use GuzzleHttp\Client;
use Lichess\Entity\ArenaTournament;
use Lichess\Hydrator\ArenaTournamentHydrator;

class ArenaTournamentProvider
{
    private Client $client;
    private ArenaTournamentHydrator $hydrator;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->hydrator = new ArenaTournamentHydrator();
    }

    public function getTournament(string $id): ArenaTournament
    {
        $response = $this->client->get('tournament/' . $id);

        return $this->hydrator->hydrateOne(json_decode($response->getBody()->getContents()));
    }
}