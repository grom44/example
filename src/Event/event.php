<?php
declare(strict_types=1);

namespace src\Event;

class Event {

    /*
    * @var string
    */
    protected $eventId;

    /*
    * @var string
    */
    protected $type;

    /*
    * @var int
    */
    protected $value;

   /*
    * @var string
    */
    protected $userId;

    public function __contruct(string $eventId, string $type, int $value, string $userId) 
    {
        $this->eventId = $eventId;
        $this->type = $type;
        $this->value = $value;
        $this->userId = $userId;
    }

    public function getEventId() : string
    {
        return $this->eventId;
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function getValue() : int
    {
        return $this->value;
    }

    public function getUserId() : string
    {
        return $this->userId;
    }
}
