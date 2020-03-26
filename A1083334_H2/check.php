<?php

$id=$_POST["id"];
$pwd=$_POST["pwd"];

//echo $id."<br/>";
//echo $pwd."<br/>";

$uid="wyes";
$upwd="CCGSH";


if($id==$uid && $pwd==$upwd)
{
 echo "Login success";
 header('Location:order.php');
}
else
{
 echo "Login failed!Back to login page in three seconds";
 echo "<meta http-equiv='refresh'
      content='3;url=loggin.php' />";
}


?>