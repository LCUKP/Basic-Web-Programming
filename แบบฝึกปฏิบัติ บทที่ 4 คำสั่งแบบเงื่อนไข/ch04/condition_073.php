<?php 
echo "ตัวอย่างที่ 1<br>";
$score = 1691100; $name = "ลัค";
if ($score >= 50){
    echo "ยินดีด้วยคุณ $name คุณสอบผ่านและหล่อเท่มากๆ คะแนนของคุณคือ $score";
};

echo "<br>ตัวอย่างที่ 2<br>";
$username = "lucky"; $pw = 1234;
if (($username=="luck") && ($pw==1234)){
    echo "ยินดีต้อนรับเข้าสู่ชมรมคนน่ารัก";
};
echo "<br>ตัวอย่างที่ 3<br>";
$username = "luck"; $pw = 1234;
if (($username=="luck") && ($pw==1234)){
    echo "ยินดีต้อนรับเข้าสู่ชมรมคนน่ารัก";
};

echo "<br>ตัวอย่างที่ 4<br>";
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