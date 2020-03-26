<html>
</html>
<?php

echo "我們已收到!"."<br/>";
echo "您的訂購資訊為:"."<br/>";

$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$ticket=$_POST["ticket"];
$startstation=$_POST["startstation"];
$finalstation=$_POST["finalstation"];
$seat=$_POST["seat"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$note=$_POST["note"];

echo "姓名:".$name."<br/>";
echo "學號:".$id."<br/>";
echo "性別:".$gender."<br/>";
echo "票種:".$ticket."<br/>";

$i=count($startstation);
for($j=0;$j<$i;$j++){
 echo "起程站:".$startstation[$j]."<br/>";
}

$i=count($finalstation);
for($j=0;$j<$i;$j++){
 echo "到達站:".$finalstation[$j]."<br/>";
}

$i=count($seat);
for($j=0;$j<$i;$j++){
 echo "座位喜好:".$seat[$j]."<br/>";
}

echo "連絡電話:".$phone."<br/>";
echo "電子信箱:".$email."<br/>";
echo "備註:".$note."<br/>";

?>