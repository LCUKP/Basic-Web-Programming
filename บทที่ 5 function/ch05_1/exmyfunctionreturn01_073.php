<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exmyfunctionreturn01_073</title>
</head>
<body>
    <?php 
    
    function cal_traingle($base,$height){
        $area=0.5*$base*$height;
        return $area;
    }
    $b=5;$h=10;
    $ans=cal_traingle($b,$h);
    echo "สามเหลี่ยมรูปนี้มีพื้นที่เท่ากับ $ans ซ.ม.<br>";
    
    ?>
</body>
</html>