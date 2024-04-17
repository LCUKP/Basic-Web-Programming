<?php 

$price=900;$name="luck";$discount=0;$netprice=0;
if (($price>=0)&&($price<=1000)){
    $netprice=$price-$discount;
    echo "ชื่อลูกค้า : $name <br> ราคาสินค้า : $price <br> ส่วนลด : $discount <br> ยอดที่ต้องชำระ : $netprice";
}
else{
    $discount=$price*0.04;
    $netprice=$price-$discount;
    echo "ชื่อลูกค้า : $name <br> ราคาสินค้า : $price <br> ส่วนลด : $discount <br> ยอดที่ต้องชำระ : $netprice";
}

?>