<?php

$abb="th";
switch($abb){
    case "ge":
        $country="Germany";
        break;
    case "th":
        $country="Thailand";
        break;
    case "hu":
        $country="Hungary";
        break;
    case "tr":
        $country="Turkey";
        break;
    default :
        $country= "Unknown country";
}
echo "Your countr is $country";

?>