<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 16.05.2017
 * Time: 16:02
 */
class user
{
    public $login;
    public $pass;
    public $avatar_path; //last used
    public $name; //strlen >= 1
    public $surname;  //strlen >= 1
    public $age; // int!!!, > 16
    public $description; //strlen >= 50
    function __construct($login, $password, $name, $surname, $age, $description)
    {
        if (!is_string($login))
            throw new InvalidArgumentException("Wrong login");
        $this->login = $login;
        if (!is_string($name) || strlen($name) < 2)
            throw new InvalidArgumentException("Wrong name");
        $this->name = $name;
        if (!is_string($surname) || strlen($surname) < 2)
            throw new InvalidArgumentException("Wrong surname");
        $this->surname = $surname;
        if (!is_int($age) || $age < 16)
            throw new InvalidArgumentException("Wrong age");
        $this->name = $name;
        if (!is_string($password))
            throw new InvalidArgumentException("Wrong password");
        $this->pass = $password;
        if (!is_string($description) || strlen($surname) < 50)
            throw new InvalidArgumentException("Wrong description");
        $this->description = $description;
    }
}

return array(new user("bogdan222", "123", "Bogdan", "SH",132,"This is my account"));
