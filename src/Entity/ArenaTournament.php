<?php

namespace Lichess\Entity;

use DateTime;

class ArenaTournament
{
    public string $id;
    public string $createdBy;
    public string $system;
    public int $minutes;
    public Clock $clock;
    public bool $rated;
    public string $fullName;
    public int $nbPlayers;
    public Variant $variant;
    public DateTime $startsAt;
    public DateTime $finishesAt;
    public int $status;
    public Perf $perf;
    public int $secondsToStart;
    public bool $hasMaxRating;
    public bool $private;
    public Position $position;
    public Schedule $schedule;
    public Winner $winner;
}
