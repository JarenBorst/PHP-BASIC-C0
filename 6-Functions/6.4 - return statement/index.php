<!DOCTYPE html>
<html>
<body>

<?php

function maakBerekening(){
    $koopPrijs = 75;
    $korting = 10;
    $proc= ($koopPrijs / 100) * $korting;
    return $koopPrijs-$proc;
}

function zetAllesGroot(){
    echo "Het totaalbedrag is " .  maakBerekening()  .  " euro";
}

zetAllesGroot();
?>

</body>
</html>