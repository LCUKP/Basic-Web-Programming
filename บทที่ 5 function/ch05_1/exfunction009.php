<?php

$username=@$_GET['username'];
$password=@$_GET['password'];
function checkuser($username,$password){
    if(($username=="Puwanas")&&($password==12345)){
        echo "ยินดีต้อนรับเข้าสู่โปรแกรม<br>";
    } else {
        echo "รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง<br>";
    }
};
Checkuser($username,$password);
?>