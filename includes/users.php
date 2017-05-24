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
    public $password;
    public $avatar_path;
    public $name;
    public $surname;
    public $birthday;
    public $description;
    function __construct($login, $password, $name, $surname, $birthday, $description)
    {
        if (!is_string($login))
            throw new InvalidArgumentException("Wrong login");
        $this->login = $login;

        if (!is_string($password))
            throw new InvalidArgumentException("Wrong password");
        $this->password = $password;

        if (!is_string($name) || strlen($name) < 2)
            throw new InvalidArgumentException("Wrong name");
        $this->name = $name;

        if (!is_string($surname) || strlen($surname) < 2)
            throw new InvalidArgumentException("Wrong surname");
        $this->surname = $surname;

        if (gettype($birthday) != "object" || get_class($birthday) != "DateTime")
            throw new InvalidArgumentException("Birthday is in wrong format");
        date_default_timezone_set("Europe/Kiev");
        $today = new DateTime(date("Y-m-d"));
        $interval = $birthday->diff($today);
        if (intval($interval->format('%r%y')) < 16)
            throw new InvalidArgumentException("Wrong age");
        $this->birthday = $birthday->format("Y-m-d");

        if (!is_string($description) || strlen($description) < 50)
        {
            throw new InvalidArgumentException("Wrong description");
        }
        $this->description = $description;
    }
}
date_default_timezone_set("Europe/Kiev");
return array(new user("bogdan222", "123", "Bogdan",
    "SH", new DateTime("1999-03-05"),
    "This is my account. And I really need to have more than 50 chars to succeed. That is why I'm typing all theese words here. "));
