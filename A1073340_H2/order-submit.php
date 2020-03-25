<?php

$username=$_POST["username"];
$number=$_POST["number"];
$sex=$_POST["sex"];
$adult=$_POST["adult"];
$old=$_POST["old"];
$love=$_POST["love"];
$seat=$_POST["seat"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$comment=$_POST["comment"];

echo "您的姓名：".$username."<br/>";
echo "您的學號：".$number."<br/>";
echo "性別：".$sex."<br/>";
echo "全票：".$adult."<br/>";
echo "老人票：".$old."<br/>";
echo "愛心票：".$love."<br/>";
echo "位置：".$seat."<br/>";
echo "連絡電話：".$phone."<br/>";
echo "電子信箱：".$email."<br/>";
echo "<br/>"."備註："."<br>";
echo nl2br ($comment);

?>
