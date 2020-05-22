<?php
declare(strict_types=1);

namespace src\People;

class People {

    /*
    * @var string
    */
    protected $name;
   
    /*
    * @var string
    */
    protected $userId;

    /*
    * @var EventCollection
    */
    protected $eventCollction;


    public function __contruct(string $name, string $userId) 
    {
        $this->name = $name;
        $this->userId = $userId;
    }

    public function setEvents(EventCollection $eventsCollection) : void
    {
        $this->eventCollction = $eventCollction->getByPeopleId($this->userId);
    }

    public function getPeopleId() : string
    {
        return $this->userId;
    }
}