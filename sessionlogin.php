<?php

session_start();

echo"hi".$_SESSION ['user_name'];

if(!isset($_SESSION['user_id']))
{
    header("location:sessionlogin.php");
}

?>