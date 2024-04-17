<?php

$grade="a";
switch($grade){
    case "A":
        echo "เยี่ยมยอด";
        break;
    case "B":
        echo "ดี";
        break;
    case "C":
        echo "พอใช้";
        break;
    case "D":
        echo "ปรับปรุง";
        break;
    case "F":
        echo "ตก";
        break;
    default :
        echo "ไม่มีเกรดที่คุณระบุ";

}

?>