<?php
$filename = "practice.txt";
$dataArray = array("This is file handling.");
$handle = fopen($filename, 'a');
if ($handle){
    foreach ($dataArray as $data){
        fwrite($handle, $data . "\n");
    }
    fclose($handle);
}
echo "</br>";
$handle2 = fopen($filename, 'r');
if ($handle2){
    $filesize = filesize($filename);
    if ($filesize > 0){
        $filecontent = fread($handle2, $filesize);
        echo nl2br($filecontent);
    }
    fclose($handle2);
}
?>