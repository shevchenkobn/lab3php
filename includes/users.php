<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 16.05.2017
 * Time: 16:02
 */
class user
{
    public $name;
    public $pass;
    public $description;
    function __construct($name, $password, $description)
    {
        if (!is_string($name))
            throw new InvalidArgumentException("Wrong name");
        $this->name = $name;
        if (!is_string($password))
            throw new InvalidArgumentException("Wrong password");
        $this->pass = $password;
        if (!is_string($description))
            throw new InvalidArgumentException("Wrong password");
        $this->description = $description;
    }
}

return array(new user("Bogdan", "123", "This is my account"));
