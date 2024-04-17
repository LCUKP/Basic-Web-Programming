<?php
$Name = "Luck";
echo "Hello $Name" ; 
echo 1+9;

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();


?>