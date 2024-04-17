<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labcondition02_073</title>
</head>
<body>
<?php
// งานนี้เป็นของภูวนัส ใจจิตแจ่ม สก.2/2 073
$fare;
$farePerKilometre;
$farePerHour;

$kilometre = 40;
$hour = 1.5;
if(($kilometre >= 0)&&($kilometre <= 5)){
    $fare=35;
    $farePerKilometre=$fare;
}
elseif(($kilometre >= 6)&&($kilometre <= 20)){
    $fare=6;
    $farePerKilometre=$kilometre*$fare;
}
elseif(($kilometre >= 21)&&($kilometre <= 50)){
    $fare=5.5;
    $farePerKilometre=$kilometre*$fare;
}
else{
    $fare=4.5;
    $farePerKilometre=$kilometre*$fare;
};

$farePerHour = $hour*2;
$fareTotal = $farePerKilometre+$farePerHour;

echo "ระยะทางของคุณทั้งหมดคือ $kilometre กิโลเมตร ค่าโดยสารต่อหน่วยกิโลเมตรของคุณคือ $fare คิดเป็น $farePerKilometre<br>";
echo "คุณใช้เวลาโดยสารทั้งหมด $hour ชั่วโมง ชั่วโมงละ 2 บาท ค่าโดยสารต่อชั่วโมงของคุณคือ $farePerHour <br>";
echo "ค่าโดยสารรวมของคุณคือ $fareTotal <br>";
?>
</body>
</html>