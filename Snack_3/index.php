<?php

$myArray = [];

while(count($myArray) < 15) {
    $randomInt = rand(1, 100);

    if(!in_array($randomInt, $myArray)) {
        $myArray[] = $randomInt;
    }
}
var_dump($myArray)
?>