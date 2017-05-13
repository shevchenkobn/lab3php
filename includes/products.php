<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 17:53
 */

public class product
{
    public $name;
    public $ageLimits;
    public $price;
    public function __constructor($name, $ageLimits, $price)
    {
            if (!is_array($ageLimits) || count($ageLimits) <= 2
             || !is_int($ageLimits[0]) || !is_int($ageLimits[1])
             || $ageLimits[0] < 3 || $ageLimits[0] > 200
             || $ageLimits[1] < 3 || $ageLimits[1] > 200)
                throw new InvalidArgumentException("Bad age limits");
            if (!is_string($name))
                throw new InvalidArgumentException('$name is not a string');
            if (!(is_double($price) || is_int($price)))
                throw new InvalidArgumentException('$price is not a double or an integer');
            $this->name = $name;
            $this->price = $price;
            $this->ageLimits = $ageLimits;
    }
}

$goods = array(
    new product("Pomidori", array(3, 200), 4.55),
    new product("Syr","age" => "2 ", "price" => 34.84, "number" => 666),
    new product("Alcohol 120%","age" => "18 ", "price" => .99, "number" => 29),
    new product("Slon","age" => "16 65", "price" => 109.87, "number" => 94),
    new product("Kvartira","age" => "18 ", "price" => 33.55, "number" => 3),
    new product("Khleb","age" => "3 7", "price" => "14.02", "number" => 123));