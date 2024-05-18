<?php

$y1 = $_GET['year1'];
$y2 = $_GET['year2'];
$y3 = $_GET['year3'];
$y4 = $_GET['year4'];
$y5 = $_GET['year5'];

if (empty($y1) || empty($y2) || empty($y3) || empty($y4) || empty($y5)){
    echo 'Debe indicar todos los años, del 1 al 5';
}
$Berlin = 'Los años menores al año de la caída del muro de Berlín son; ';
if ($y1<=1989) {
    $Berlin = $Berlin . ', '. $y1;
}
if ($y2<=1989) {
    $Berlin = $Berlin . ', '. $y2;
}
if ($y3<=1989) {
    $Berlin = $Berlin . ', '. $y3;
}
if ($y4<=1989) {
    $Berlin = $Berlin . ', '. $y4;
}
if ($y5<=1989) {
    $Berlin = $Berlin . ', '. $y5;
}
echo $Berlin . '<br>';
$Covid = 'Los años mayores al año de inicio de la pandemia por COVID son: ';
if ($y1>=2019) {
    $Covid = $Covid . ', '. $y1;
}
if ($y2>=2019) {
    $Covid = $Covid . ', '. $y2;
}
if ($y3>=2019) {
    $Covid = $Covid . ', '. $y3;
}
if ($y4>=2019) {
    $Covid = $Covid . ', '. $y4; 
}
if ($y5>=2019) {
    $Covid = $Covid . ', '. $y5;
}
echo $Covid . '<br>';
$Argentina = 'Los años menores al año de independencia de Argentina son: ';
if ($y1<=1810) {
    $Argentina = $Argentina . ', '. $y1;
}
if ($y2<=1810) {
    $Argentina = $Argentina . ', '. $y2;
}
if ($y3<=1810) {
    $Argentina = $Argentina . ', '. $y3;
}
if ($y4<=1810) {
    $Argentina = $Argentina . ', '. $y4;
}
if ($y5<=1810) {
    $Argentina = $Argentina . ', '. $y5;
}
echo $Argentina . '<br>';
$SanMartin = 'Los años menores al año de independencia de Argentina son: ';
if ($y1>=1778) {
    $SanMartin = $SanMartin . ', '. $y1;
}
if ($y2>=1778) {
    $SanMartin = $SanMartin . ', '. $y2;
}
if ($y3>=1778) {
    $SanMartin = $SanMartin . ', '. $y3;
}
if ($y4>=1778) {
    $SanMartin = $SanMartin . ', '. $y4;
}
if ($y5>=1778) {
    $SanMartin = $SanMartin . ', '. $y5;
}
echo $SanMartin;
?>
