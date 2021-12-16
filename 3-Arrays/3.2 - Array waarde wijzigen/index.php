<!DOCTYPE html>
<html>
<body>

<?php
$mydog = array(
    "Chahid",
    "MO",
    "Jaren"
);
echo $mydog[0] .' '.  $mydog[1] .' '.  $mydog[2]; 
echo "<br>";
$mydog[2] = 'Poep';
echo $mydog[0] .' '.  $mydog[1] .' '.  $mydog[2];
?>
</body>
</html>