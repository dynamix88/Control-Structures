<?php
 
echo "<p>\n";
 
$counter = 1;
while ($counter < 10){
  echo 'abc ';
  $counter++;
}
 
echo "</p>\n";
echo "<p>\n";
 
$counter = 1;
do{
  echo 'xyz ';
  $counter++;
} while ($counter < 10) ;
 
echo "</p>\n";
 
for ($x=1; $x<10; $x++){
  echo "$x ";
}
//The space inside the "" is necessary to separate the numbers.  
 
//Generate ordered list.  
echo "\n<ol>";
for ($x='A'; $x<'G'; $x++){
  echo "<li>Item $x</li>\n";
  }
echo "\n</ol>";
//Note that letters may be used in the for loop in place of numbers.
 
?>