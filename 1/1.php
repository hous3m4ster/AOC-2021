<?php

$file = explode("\n", file_get_contents('input'));
$tally = 0;

foreach($file as $entry){
    if(isset($prev) && $entry > $prev){
        $tally++;
    }
    $prev = $entry;
}
print("\n\n" . $tally . "\n\n");