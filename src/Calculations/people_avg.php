<?php
declare(strict_types=1);

namespace src\Calculations;

use src\People\People;

class PeopleAvg implements Calculate {

    /*
    *  People
    */
    protected $people;

    public function __construct(People $people)
    {
        $this->people = $people;
    }

    public function calculate() : float
    {
        //do some calculation base on event collection
    }
}