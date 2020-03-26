<?php

$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$points1=$_POST["points1"];
$points2=$_POST["points2"];
$points3=$_POST["points3"];
$Start=$_POST["Start"];
$End=$_POST["End"];
$Like=$_POST["Like"];
$ph=$_POST["ph"];
$email=$_POST["email"];
$message=$_POST["message"];

echo "姓名:".$name."<br/>";
echo "學號:".$id."<br/>";
echo "性別:".$gender."<br/>";
echo "全票:".$points1."<br/>";
echo "敬老票:".$points2."<br/>";
echo "愛心票:".$points3."<br/>";
echo "起始站:".$Start."<br/>";
echo "終點站:".$End."<br/>";
echo "座位愛好:".$Like."<br/>";
echo "電話:".$ph."<br/>";
echo "信箱:".$email."<br/>";
echo "備註:".nl2br($message)."<br/>";


?>