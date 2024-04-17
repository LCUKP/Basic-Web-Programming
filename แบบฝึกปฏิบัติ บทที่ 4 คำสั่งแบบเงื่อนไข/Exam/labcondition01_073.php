<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labcondition01_073</title>
</head>
<body>
<?php 
// งานนี้เป็นของภูวนัส ใจจิตแจ่ม สก.2/2 073
$read=495; $listen=495; $toeic = $read+$listen; $passtoeic = 550;
$Name = "ภูวนัส";
$ScoreRead = 320 ; $Scorelisten = 230;
$TotalScore = $ScoreRead+$Scorelisten;

if (($TotalScore>=$passtoeic)&&($TotalScore<=$toeic)){
    echo "ยินดีด้วยคุณ $Name ผ่านการทดสอบ TOEIC<br>";
    echo "คะแนนของคุณคือ <br>";
    echo "คะแนนการอ่าน $ScoreRead<br>";
    echo "คะแนนการเขียน $Scorelisten<br>";
    echo "คะแนนรวม $TotalScore<br>";
}
else {
    echo "คุณสอบไม่ผ่าน";
};

?>
</body>
</html>