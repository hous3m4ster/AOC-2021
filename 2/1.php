<?php

$file = explode("\n", file_get_contents('input'));
$height = 0;
$depth = 0;

foreach($file as $line){
    $instructions = explode(" ", $line);
    switch($instructions[0]){
        case 'forward':
            $height += $instructions[1];
            break;
        case 'up':
            $depth -= $instructions[1];
            break;    
        case 'down':
            $depth += $instructions[1];
            break;
    }
}
print("\n\n" . $height*$depth . "\n\n");