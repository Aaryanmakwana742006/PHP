<?php
$connection=mysqli_connect("localhost","root","","aptutorial");

$query=mysqli_query($connection,"insert into tbl_student(st_name,st_gender) values('jaydeep','Male')") or die("error".mysqli_error($connection));

if($query)
{
    echo"<script>alert('Record Inserted')</script>";
}
?>