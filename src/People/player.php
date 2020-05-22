<?php
declare(strict_types=1);

namespace src\People;

class Player extends People {

    /*
    * @var string
    */
    protected $role;

    /*
    * @var float
    */
    protected $height;

    public function __contruct(string $name, string $userId, string $role, float $height) 
    {
        parent::__construct($name, $userId);
        $this->role = $role;
        $this->height = $height;
    }
}
