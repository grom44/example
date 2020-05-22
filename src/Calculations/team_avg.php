<?php
declare(strict_types=1);

namespace src\Calculations;

use src\People\Team;

class TeamAvg implements Calculate {

    /*
    *  Team
    */
    protected $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }
    public function calculate()
    {
        //do some calculation base on event collection of team players
    }
}