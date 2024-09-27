<?php
$name="Aaryan ";
echo var_dump($name);

$num=100;
echo var_dump($num);

$numfloat=10.50;
echo var_dump($numfloat);

$bool=true;
echo var_dump($bool);

$array=["AK",10,10.50];
echo var_dump($array);

$null=null;
echo var_dump($null);

$connenction = ftp_connect("127.0.0.1") or die ("local host not found");
echo var_dump($connenction);
?>