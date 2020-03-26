<html>
</html>
<?php
$name=$_POST["name"]
$sid=$_POST["sid"]
$gender=$_POST["gender"]
$ticket=$_POST["ticket"]
$station1=$_POST["station1"]
$seat=$_POST["seat"]
$phone=$_POST["phone"]
$email=$_POST["email"]
echo "姓名:".$name."<br/>";
echo "學號:".$sid."<br/>";
echo "性別:".$gender."<br/>";
echo "票種:".$ticket."<br/>";
$i=count($name);
for($j=0;$j<$i;$j++)
{
	echo"姓名:".$name[$j]."<br/>";
}
$a=count($station1);
for($j=0;$j<$i;$j++){
	echo "起點站".$station1[$j]."<br/>";
}
$a=count($seat);
for($j=0;$j<$i;$j++){
	echo "座位喜好".$seat[$j]."<br/>";
}
echo "手機號碼:".$phone."<br/>";
echo "Email:".$email."<br/>";


?>

