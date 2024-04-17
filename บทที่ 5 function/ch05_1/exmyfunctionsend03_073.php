<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exmyfunctionsend03_073</title>
</head>
<body>
    <?php 
    $percend;$discount;
    $price=5030;
    cal($price);
    function cal($price){
        if ($price<=0){
            echo "สินค้าของคุณไม่ถูกต้อง";
        }
        elseif($price<=3000){
            $percend="2%";
            $discount=$price*0.02;
        }
        elseif($price<=5000){
            $percend="3%";
            $discount=$price*0.03;
        }
        else {
            $percend="5%";
            $discount=$price*0.05;
        }
        $net=$price-$discount;
        echo "ยอดซื้อสินค้าของคุณคือ $price บาท<br>";
        echo "คุณได้ส่วนลด $percend ส่วนลดของคุณคือ $discount บาท<br>";
        echo "ยดชำระทั้งหมดคือ $net บาท";

    }
    
    ?>
</body>
</html>