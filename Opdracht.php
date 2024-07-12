<!DOCTYPE html>
 <html>
  <body>

  <h1>My First PHP Code</h1>

<?php


$myarray = array(42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8);

for ($i = 0; $i < count($myarray); $i++) { 
  echo "Index ", $i, ", value ", $myarray[$i], ": ";

  if ($myarray[$i] % 2 == 0) {
    echo "even\n";
  }
  else {
    echo "odd\n";
  }
}







?>

 </body> 
 </html>