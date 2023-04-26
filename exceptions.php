<?php

function divide($a, $b) {
    try {
        if ($b === 0) {
            throw new Exception("La division par zéro n'est pas autorisée.\n");
        }
        return $a / $b;
    } catch (Exception $error) {
        echo $error->getMessage();
    }
}

echo divide(10, 0);
echo divide(10, 2);