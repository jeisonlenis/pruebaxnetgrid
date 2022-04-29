<?php

$myArray = [1, 3, 2, 0, 7, 8, 1, 3, 0, 6, 7, 1];
$nuevoarray = [];

for ($i = 0; $i < count($myArray); $i++) {
    if ($myArray[$i] == 0) {
        sort($nuevoarray);
        array_push($nuevoarray, $myArray[$i] = ' ');
        if ($myArray[$i + 1] == 0) {

            array_push($nuevoarray, $myArray[$i] = ' X ');
        }
        echo implode($nuevoarray);
        unset($nuevoarray);
        $nuevoarray = array();
    }
    else if ($myArray[$i] != 0) {
        array_push($nuevoarray, $myArray[$i]);
        sort($nuevoarray);
    }
}
echo implode($nuevoarray);
?>