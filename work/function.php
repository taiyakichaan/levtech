<?php
function sum_number ($sum_min,$sum_max){
$result=0;
for($i=$sum_min;$i<=$sum_max;$i++){
    $result=$result+$i;
}
}
echo $result.PHP_EOL;