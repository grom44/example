<?php
declare(strict_types=1);

namespace src\Event;

class EventCollection {

    /*
    * @var Event[]
    */
    protected $events;

    public function addEvent(Event $event) : void 
    {
        if (!$this->checkEventById($event->getEventId()))
        {
            $this->events[$event->getEventId()] = $event;
        }
        
    }

    public function checkEventById(string $id) : bool
    {
        return array_key_exists($id, $this->events);
    }

    public function getByPeopleId(string $id) : array
    {
        $peopleEvents = [];

        foreach ($this->events as $k => $v) {
            if ($id === $v->getUserId()) {
                $peopleEvents[] = $v;
            }
        }

        return $peopleEvents;
    }
}
