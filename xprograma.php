<?php
$n = 10;

if ($n == 0) {
    echo 'ERROR';
}
if ((($n % 2) == 0) && $n != 2) {
    //for pares
    $middlenegative = $n / 2;
    $middlepositive = $middlenegative + 1;
    $middlenegative2 = $n / 2 + 1;
    $middlepositive2 = (($n * $n) / 2) + 10 + 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            //echo $i;
            if (
            ($middlenegative == $i && $middlenegative == $j) ||
            ($middlenegative == ($i) && $middlenegative == ($j - 1)) ||
            ($middlenegative == ($j) && $middlenegative == ($i - 1)) ||
            ($middlenegative2 == $i && $middlenegative2 == $j) ||
            ($i == $n && $j == $n) || ($i == $j) ||
            ($j == $i + ($n - 1)) || ($i == $j + ($n - 1)) ||
            ($i == ($n - $j) + 1)
            ) {
                echo "X";
            }
            else {
                echo "_";
            }
        }
        echo '</br>';
    }
}
else {
    //for impares
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            $middlenegative = $n / 2;
            $middlepositive = $middlenegative + 1;
            $middlenegative2 = $n / 2 + 1;
            $middlepositive2 = (($n * $n) / 2) + 10 + 1;
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $n; $j++) {
                    //echo $i;
                    if (
                    ($middlenegative == $i && $middlenegative == $j) ||
                    ($middlenegative == ($i) && $middlenegative == ($j - 1)) ||
                    ($middlenegative == ($j) && $middlenegative == ($i - 1)) ||
                    ($middlenegative2 == $i && $middlenegative2 == $j) ||
                    ($i == $n && $j == $n) || ($i == $j) ||
                    ($j == $i + ($n - 1)) || ($i == $j + ($n - 1)) ||
                    ($i == ($n - $j) + 1)
                    ) {
                echo "X";
            }
            else {
                        echo "_";
                    }
                }
                echo '</br>';
            }
        }
    }
}
?>