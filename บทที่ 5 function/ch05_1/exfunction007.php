<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exfunction001</title>
</head>
<body>

<?php

function checkuser($username,$password){
    if(($username=="Puwanas")&&($password==12345)){
        echo "ยินดีต้อนรับเข้าสู่โปรแกรม<br>";
    } else {
        echo "รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง<br>";
    }
}

checkuser("Puwanas",12345);
checkuser("Puwanat",12345);

?>
    
</body>
</html>