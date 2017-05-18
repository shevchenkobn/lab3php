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
    function __construct($n, $p)
    {
        if (!is_string($n))
            throw new InvalidArgumentException("Wrong name");
        $name = $n;
        if (!is_string(pn))
            throw new InvalidArgumentException("Wrong password");
        $pass = $p;
    }
}

return array(new user("test", "123"));
