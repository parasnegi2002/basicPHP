<?php
$inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
$outputArray = array();

foreach($inputArray as $inputArrayItem) {
    foreach($outputArray as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2 ;
        }
    }
    $outputArray[] = $inputArrayItem;
}
print_r($outputArray);
