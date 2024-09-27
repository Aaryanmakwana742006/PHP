<?php

$a[0] = 10;
$a[1] = 10.50;
$a[2] = "C";
$a[3] = "C++";
$a[4] = true;

$a[] = 10;
$a[] = 10.50;
$a[] = "C";
$a[] = "C++";
$a[] = true;
$a[] = 94.50;

$a = array(10, 10.50, "C", "C++", true, 989);
echo "<p>{$a[0]}</p>";
for ($i = 0; $i < count($a); $i++){
    echo "<br/>" . $a[$i];
}
foreach ($a as $value){
    echo "<br/>" . $value;
}
foreach ($a as $key => $value){
    echo "<br/>Key is $key and Value is $value";
}
echo "<pre>";
print_r($a);
var_dump($a);
var_export($a);
?>