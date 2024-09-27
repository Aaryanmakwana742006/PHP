<?php
session_start();
require'./constant.php';
if(!isset($_SESSION['user_id']))
{
    header("location:sessionlogin.php");
}
if($_POST)
{
    $order_date=date('d-m-y');
    $user_id=$_SESSION['user_id'];
    $product_name=$_POST('txt1');
    $product_qty=$_POST('txt2');
    $order_status="Pending";
    $q=mysqli_query($connection,"insert into tbl_order_master(order_data,user_id,product_name,product_qty) values('{$order_data}','{$user_id}','{$product_name}','{$product_qt}',)") or die(mysqli_errno($connection));

    if($q)
    {
        echo"<script> alert('Thanks for placing order admin will update  shortly'); </script>";
    }
}
?>
<html>
    <body>
        <form method="POST">
            product name:<input type="text" name="txt1">
            product Qty:<input type="text" name="txt2">
            <input type="submit">
    </body>
</html>