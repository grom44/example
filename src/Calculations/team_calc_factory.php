<?php
declare(strict_types=1);

namespace src\Calculations;

use src\People\Team;

class TeamCalcFactroy implements Factory {

    /*
    *
    */
private $team;

    public function __construct(Team $team)
    {
        $this->team = $team
    }

    public function create() : TeamAvg
    {
        return new TeamAvg($this->team);
    }

}