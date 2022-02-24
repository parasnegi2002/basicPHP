<?php
$num=readline();
$total=0;
$x=$num;
$numStr = strval($num);
$digits = strlen($numStr);

while($x!=0)
{

    $rem=$x%10;
    $total=$total+pow($rem,$digits);
    $x=$x/10;
}
if($num==$total)
{
    echo"its armstrong";
}
else
{
    echo"not armstrong";

}
?>