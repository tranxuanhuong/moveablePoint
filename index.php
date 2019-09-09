<?php
include_once "Point.php";
include_once "MovalePoint.php";

$point=new Point(3,4);

$point->toString();

echo "<br>";

$movePoint=new MovalePoint(3,4,5,6);
$movePoint->toString();
echo "<br>";
print_r($movePoint->move());
