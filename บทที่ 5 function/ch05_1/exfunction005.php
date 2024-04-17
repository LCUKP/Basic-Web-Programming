<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exfunction005</title>
</head>
<body>
<?php

function cal($price,$amout){
    $sum=$price*$amout;
    return $sum;
}
function vat($sum){
    $vat=$sum*0.07;
    return $vat;
}

function showdata($x,$y){
    echo "ราคาสินค้ารวม = $x และภาษี = $y<br>";
}

$ans=cal(500,5);
$ans2=vat($ans);
showdata($ans,$ans2);
$ans=cal(1000,3);
$ans2=vat($ans);
showdata($ans,$ans2);


?>
</body>
</html>