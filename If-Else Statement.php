<?php
/*
In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser. 
Write a script that gets the current month and prints one of the following responses, depending on whether 
it's August or not:

It's August, so it's really hot.
Not August, so at least not in the peak of the heat.

Hint: the function to get the current month is 'date('F', time())' for the month's full name.
*/
date_default_timezone_set('Europe/Bucharest');

$currentDate= date('F', time());
$month="May";

if ($currentDate == $month){
    
    echo "It's May, so it's really hot";
}else{
    
    echo "Not May, so at least not in the peak of the heat";
}


?>