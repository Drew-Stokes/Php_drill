<?php 
// number in pounds we want to convert to kilograms
$pounds = 140;
//floating point value for the pounds to kilograms conversion
$lb_to_kg = 0.453592;
//use the variables above to calculate punds multiplied by the kilogram coversion
$kilograms = $pounds * $lb_to_kg;
//display the punds to kilograms
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";
//number in miles we want tto convert to kilometers
$miles = 2.5;
// floating point value for the mile to kilometer conversion
$mile_to_km = 1.60934;
// use the variable above to calculate miles multiplied by the kilometer conversion
$kilometers = $miles * $mile_to_km;
//display the miles to kilometers
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";
?>