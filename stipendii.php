<?php
$p1=$_POST['ime'];
$p2=$_POST['uspeh'];
echo "Здравейте, ".$p1;
if ($p2>4.50)
    echo "Вие ще получите стипендия!";
else echo "Вие няма да получите стипендия!";
?>