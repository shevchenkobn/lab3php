<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 17:53
 */
class product
{
    public $name;
    public $description;
    public $price;
    function __construct($name, $description, $price)
    {
        if (!is_string($description))
                throw new InvalidArgumentException('$description is not a string');
            if (!is_string($name))
                throw new InvalidArgumentException('$name is not a string');
            if (!(is_double($price) || is_int($price)))
                throw new InvalidArgumentException('$price is not a double nor an integer');
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
    }
}

return array(
    new product("Pomidori", "Predpolozhitelno krasniye", 4.55),
    new product("Syr", "Kak 'sir', tolko 'syr'", 34.84),
    new product("Alcohol 120%", "Ya garantiruyu", .99),
    new product("Slon", "Nikto yego ne hochet :C", 109.87),
    new product("Kvartira", "A vot yeyo vse hotyat", 33.55),
    new product("Khleb", htmlspecialchars("<no_comments>"), 14.02));
?>
