<?php
echo "ตัวอย่างที่ 4<br>";
$price1=7000; $price2=3000; $discount=0;
if($price1>=5000){
    $discount=$price1*0.03;
};
$netprice=$price1-$discount;
echo "**************************************<br>";
echo "สินค้าชิ้นที่ 1 ราคา $price1 บาท<br>";
echo "ได้รับส่วนลด $discount บาท<br>";
echo "ราคารวม $netprice บาท<br>";
echo "**************************************";

$discount=0;
if($price2>=5000){
    $discount=$price2*0.03;
};
$netprice=$price2-$discount;
echo "<br>**************************************<br>";
echo "สินค้าชิ้นที่ 1 ราคา $price2 บาท<br>";
echo "ได้รับส่วนลด $discount บาท<br>";
echo "ราคารวม $netprice บาท<br>";
echo "**************************************";


?>