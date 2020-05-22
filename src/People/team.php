<?php
declare(strict_types=1);

namespace src\People;

class Team {

    /*
    * @var array
    */
    protected $people;

    public function addPeople(People $people) : void 
    {
        if (!$this->checkPeopleById($people->getPeopleId()))
        {
            $this->people[$people->getEventId()] = $people;
        }
        
    }

    public function checkPeopleById(string $id) : bool
    {
        return array_key_exists($id, $this->people);
    }

    public function getByPeopleId(string $id) : ?People
    {
      return $this->people[$id] ?? null;
    }
}
