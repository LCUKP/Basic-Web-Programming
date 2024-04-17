<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exmyfunctionreturn03_073</title>
</head>
<body>

<?php 

function checkprice($price,$cus){
    switch($cus){
        case 1 :
        return $price;
        break;
        case 2 :
        return $price*0.05;
        break;
        case 3 :
        return $price*0.1;
        break;
    }
}
$price=6400;
$cus=3;
$net=checkprice($price,$cus);
echo "ราคาลดแล้วเหลือ $net บาท";
?>
    
</body>
</html>