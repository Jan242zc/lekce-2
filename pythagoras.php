<?php
$a = 4;
$b = 6;
$obdelnikobsah = $a * $b;
echo 'Obsah obdélníku o stranách a: ' . $a . ' a b: ' . $b . ' je ' . $obdelnikobsah . '. ';
$strana = 6;
$uhel = 60;
$vyska = sin(deg2rad($uhel)) * $strana; //sinus 60 stupňů * strana o délce 6 (cm)
$trojuhelnikobsah = $strana / 2 * $vyska;
echo 'Rovnostranný trojúhelník o straně délky ' . $strana . ' cm a úhlu ' . $uhel . ' stupňů je ' . round($trojuhelnikobsah, 0) . ' cm2.';