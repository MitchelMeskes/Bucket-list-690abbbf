<?php

echo "hoeveel activiteiten wil je aan je bucketlist toevoegen?".PHP_EOL;
    $hoeveel = readline();
    if (is_numeric($hoeveel));
        else {
        echo "Alleen nummer's!";
        exit;
        }

$herhaling = array();

    for ($i = 1;$i <= $hoeveel;$i++){
       echo "Wat wil je toevoegen aan je bucketlist?\n";
    array_push($herhaling,readline());

    }
echo "Dit staat er op jouw bucketlist:\n";

for ($i = 0;$i <= $hoeveel;$i++) {
    echo $herhaling[$i].PHP_EOL;
}
?>