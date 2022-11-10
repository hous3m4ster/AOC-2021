<?php

$file = explode("\n", file_get_contents('input'));
$tally = 0;

for($i = 0; $i < count($file)-3; $i++){
    $sum = $file[$i] + $file[$i+1] + $file[$i+2];
    if(isset($prev) && $sum > $prev){
        $tally++;
    } 
    $prev = $sum;
}
print("\n\n" . $tally . "\n\n");