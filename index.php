<?php

require __DIR__ . "/vendor/autoload.php";

use src\model\entities\Circle;
use src\model\entities\Rectangle;

$shapeOne = new Circle('#000000', 2.0);
$shapeTwo = new Rectangle('#ffffff', 3.0, 4.8);

echo "Circle color: " . $shapeOne->getColor() . "<br>";
echo "Circle area: " . $shapeOne->area() . "<br><br><br>";

echo "Rectangle color: " . $shapeTwo->getColor() . "<br>";
echo "Rectangle area: " . $shapeTwo->area() . "<br>";
