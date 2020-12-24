<?php

namespace Lichess\Service;

use GuzzleHttp\Client;

class TournamentProvider
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getTournament(string $id): array
    {
        $response = $this->client->get('tournament/' . $id);

        var_dump($response->getBody());
        return [];
    }
}