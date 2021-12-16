<!DOCTYPE html>
<html>
<body>

<?php
$variable1= 10==10;
$variable2= 20==20;

if ($variable1 && $variable2) {
    echo "allebij de variable kloppen";
} else { 
    echo "1 of allebij van de variablen klopt niet";
}

echo "<br>";

$variable1= 10==10;
$variable2= 20==18;

if ($variable1 || $variable2) {
    echo "een of meer van de variable kloppen";
} else { 
    echo "allebei de waardes zijn niet waar";
}

echo "<br>";

$variable1= 10==10;
$variable2= 20==18;

if ($variable1 xor $variable2) {
    echo "1 van de 2 variable kloppen";
} else { 
    echo "allebei de waardes zijn niet waar of ze zijn allebei waar";
}

echo "<br>";

$variable1= 10==10;
$variable2= 20==18;

if ($variable1 !== $variable2) {
    echo "de variables kloppen niet";
} else { 
    echo "de variables kloppen wel";
}
?>

</body>
</html>