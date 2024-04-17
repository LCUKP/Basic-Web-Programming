<?php 

$score1 = 30 ;
$score2 = 50 ;
$score3 = 2 ;
// การสร้างนิพจน์พร้อมเก็บค่าตัวแปร
echo "กลุ่มคณิตศาสตร์<br>";
$ans = $score1+$score2+$score3 ;
echo "ผลรวมของคะแนน = ",$ans;
// สร้างนิพจน์พร้อมแสดงผล
echo "<br>ผลรวมของคะแนน = ",$score1+$score2+$score3;

$ans=$score2%$score3;
echo "<br>ผลรับของ \$ans = ",$ans;
$ans2 =$score2/$score3;
echo "<br>ผลรับของ \$ans2 = ",$ans2,"<br><br>";

// เครื่องหมายกลุ่ม Str ด้วย .
echo "กลุ่มString<br>";
$name = "Puwanas " ; $lname = "Chaichitchaem";
$fullname = $name.$lname;
echo $fullname,"<br><br>";

// การใช้เครื่องหมายเปรียบเทียบ < > <= >= == !=
echo "กลุ่มเปรียบเทียบ<br>";
$answer = 89 == 89;
echo "ผลลับของ \$answer = ",$answer,"<br>";
$answer = $score1!=$score2;
echo "ผลลับของ \$answer = ",$answer,"<br>";
$answer = $score1>=30;
echo "ผลลับของ \$answer = ",$answer,"<br>";
// กรณีนิพจน์เป็นเท็จ
$answer=$score1<=20;
echo "ผลลับของ \$answer = ",$answer,"<br><br>";

// เครื่องหมายกำหนดค่า + += -= *= /= %=
echo "กลุ่มกำหนดค่า<br>";
$ans = 0;
$ans+=$score3;
echo "ผลลับของ \$ans = ",$ans,"<br>";
$ans*=10;
echo "ผลลับของ \$ans = ",$ans,"<br><br>";

// เครื่องหมายกลุ่มตรรกะ AND OR NOT
echo "กลุ่มตรรกะศาสตร์<br>";
$answer = (5<=3) and (2>=2);
echo "ผลลับของ \$answer = ",$answer,"<br>";
$username="luck";
$password="123456789";
$email = "64209010073@htc.ac.th";
$answer= ($username=="luck") and ($password=="123456789") and ($email=="64209010073@htc.ac.th");
echo "ผลลับของ \$answer = ",$answer,"<br><br>";

// เครื่องหมายลดค่าทีละ 1 ++ --
echo "กลุ่มลดค่า<br>";
$number1 = 99; $number2 = 20;
$number1++;
echo "ผลลับของ \$number1++ = ",$number1,"<br>";
$number1--;
echo "ผลลับของ \$number1++ = ",$number1,"<br>";

$num=2; $num2=56;
$c=((5+4*3)-4)%13+($num2-$num);
echo $c,"<br>";

$ans=100%9;
$ans2=77%9;
echo $ans,"<br>",$ans2,"<br>";

$ans=((100*2)*25)/4;
$a=10;
$ans= $a+=2;
echo $ans;
?>