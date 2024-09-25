<?php


function izracunajPorez($broj)
{
    $porez = $broj * 0.22;
    if ($broj < 1) {
        die("Ne moze tako mali broj!");
    } else if (!is_numeric($broj)) {
        die("To nije broj!");
    } else
        echo "Porez od $broj je $porez";
}

izracunajPorez("1570");