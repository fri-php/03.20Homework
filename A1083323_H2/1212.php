<?php

$name=$_POST["name"];
$id=$_POST["id"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$Yournum=$_POST["Yournum"];
$Yourloc=$_POST["Yourloc"];
$Yourdes=$_POST["Yourdes"];
$Yourfav=$_POST["Yourfav"];
$comment=$_POST["comment"];

echo "姓名:".$name."<br/>";
echo "學號:".$id."<br/>";
echo "電子郵件:".$email."<br/>";
echo "性別:".$gender."<br/>";
echo "連絡電話:".$mobile."<br/>";
echo "票種:".$Yournum."<br/>";
echo "起始站:".$Yourloc."<br/>";
echo "終點站:".$Yourdes."<br/>";
echo "座位喜好:".$Yourfav."<br/>";


?>
