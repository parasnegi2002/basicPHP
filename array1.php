<?php
$a=[];
$i=0;
while(1){
    $p=readline();
    if($p%2==0){
        $a[$i]=$p;
        $i++;
    }
    if($i==5){
        break;
    }
}

for($i=0; $i<5; $i++ ){
    echo $a[$i];
    
}