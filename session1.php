<?php
session_start();

if($_POST)
{
    $EMAIL=$_POST['EMAIL'];
    $PASSWORD=$_POST['PASSWORD'];
    $q=mysqli_query("");         
}
?>
<html>
    <body>
        <form method="post">
            EMAIL:<input type="EMAIL"name="EMAIL">
            PASSWORD:<input type="PASSWORD"name="PASSWORD">
            <input type="submit">
        </form>
    </body>
</html>                      