<?php

$year=2546;
if(($year>=2489)&&($year<=2507)){
    $old=2565-$year;
    echo "คุณมีอายุ $old ปี อยู่ใน Gen B";
}
elseif(($year>=2508)&&($year<=2522)){
    $old=2565-$year;
    echo "คุณมีอายุ $old ปี อยู่ใน Gen X";
}
elseif(($year>=2523)&&($year<=2540)){
    $old=2565-$year;
    echo "คุณมีอายุ $old ปี อยู่ใน Gen Y";
}
else{
    $old=2565-$year;
    echo "คุณมีอายุ $old ปี อยู่ใน Gen Z";
};

?>