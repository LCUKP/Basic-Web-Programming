<?php 

$sell=array(1250,2000,1000,3500,4000);
$count=0;$sum=0;
while($count<=4){
    echo "พนักงานคนที่ ",$count+1," มียอดขายเท่ากับ ",$sell[$count],"<br>";
    $sum=$sum+$sell[$count];
    $count++;
}
echo "ยอดขายของพนักงานขายทั้ง 5 คน มีค่าเท่ากับ $sum";


?> 