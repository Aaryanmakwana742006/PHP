<?php

$a[0] = "Zero";
$a['c'] = "Computer";
$a[10] = "AK";
$a[99] = 99;
$a = array(
    0=>"Zero",
    "C"=>"Computer",
    10=>"AK",
    99=>99
);
echo "C is use for ".$a['C'];

foreach($a as $value){
echo "<br/>".$value;
}
foreach($a as $key=>$value)
{
    echo "<br/>Key is $key and Value is $value";
}
echo "<pre>";
print_r($a);
var_dump($a);
var_export($a);
?>