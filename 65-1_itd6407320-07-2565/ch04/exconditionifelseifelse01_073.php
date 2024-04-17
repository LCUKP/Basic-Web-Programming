<?php

$customer="member";
$price=340.50;
if($customer=="general"){
    $discount=$price*0/100;
    $total=$price-$discount;
}
else if($customer=="member"){
    $discount=$price*5/100;
    $total=$price-$discount;
}
else{
    $discount=$price*10/100;
    $total=$price-$discount;
};
echo "ยอดชำระก่อนลดราคา $price";
echo "<p style=color:red>ส่วนลดของคุณคือ $discount </p>";
echo "ยอดที่คุณต้องชำระ คือ",number_format($total,2,".");
?>