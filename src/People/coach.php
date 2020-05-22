<?php
declare(strict_types=1);

namespace src\People;

class Coach extends People {

    /*
    * @var int
    */
    protected $years;

    public function __contruct(string $name, string $userId, string $years) 
    {
        parent::__construct($name, $userId);
        $this->years = $years;
    }
}
