<?php

setcookie("username","Aaryan");
setcookie("age",18,time()+3600);

echo $_COOKIE['username'];
print_r($_COOKIE);

if (isset($_COOKIE['username']))
{
  echo"Cookie is set";
}
setcookie("username", time()-1);

?>