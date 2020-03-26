
<?php

$name=$_POST["name"];
$sid=$_POST["sid"];
$ttype=$_POST["ttype"];
$startp=$_POST["startp"];
$endp=$_POST["endp"];
$sitat=$_POST["sitat"];
$cellph=$_POST["cellph"];
$email=$_POST["email"];
$others=$_POST["others"];

echo "訂票人名子:".$name."<br/>";
echo "訂票人學號:".$sid."<br/>";
echo "訂票票種:".$ttype."<br/>";
echo "起站為:".$startp."<br/>";
echo "迄站為:".$endp."<br/>";
echo "座位位置偏好為:".$sitat."<br/>";
echo "訂票人手機號碼為:".$cellph."<br/>";
echo "訂票人電子郵件為:".$email."<br/>";
echo "其他備註:".nl2br(htmlspecialchars($others))."<br/>";


?>