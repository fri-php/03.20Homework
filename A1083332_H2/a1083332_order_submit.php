<?php

echo "Hello!"."<br/>";

echo "請確認您的訂票資訊!!!"."<br/>";

$name=$_POST["name"];
$stid=$_POST["student_ID"];
$gender=$_POST["gender"];
$normal=$_POST["normal"];
$old=$_POST["old"];
$heart=$_POST["heart"];
$start=$_POST["start"];
$arrive=$_POST["arrive"];
$seat=$_POST["seat"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$attention=$_POST["attention"];


echo "姓名:".$name."<br/>";
echo "學號:".$stid."<br/>";
echo "性別:".$gender."<br/>";
echo "普通票:".$normal."<br/>";
echo "敬老票:".$old."<br/>";
echo "愛心票:".$heart."<br/>";
echo "起始站:".$start."<br/>";
echo "終點站:".$arrive."<br/>";
echo "座位喜好:".$seat."<br/>";
echo "手機號碼:".$phone."<br/>";
echo "信箱:".$email."<br/>";
echo "備註:".n12br($attention)."<br/>";

?>