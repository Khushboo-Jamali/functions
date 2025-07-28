<?php

function num($x)
{
    $y = 3;
    if ($x <= 100) {
        echo $x  . "<br>";
        num($x + 1);
    }
}

num(1);