<?php 

$number=1999.02;
echo number_format($number),"<br>";
echo number_format($number,2),"<br>";
echo number_format($number,3),"<br>";
echo number_format($number,3,'.',''),"<br>";
echo number_format($number,3,'+','-'),"<br>";

?>