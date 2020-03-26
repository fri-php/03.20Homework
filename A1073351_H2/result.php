<html>
</html>
<?php
$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$ticket=$_POST["ticket"];
$Startstation=$_POST["Startstation"];
$Terminal=$_POST["Terminal"];
$seat=$_POST["seat"];
$phonenumber=$_POST["phonenumber"];
$Email=$_POST["Email"];
$note=$_POST["note"];
echo "姓名:".$name."<br/>";
echo "學號:".$id."<br/>";
echo "性別:".$gender."<br/>";
echo "票種:".$ticket."<br/>";
$i=count($Startstation);
for($j=0;$j<$i;$j++){
	echo "起點站".$Startstation[$j]."<br/>";
}
$a=count($Terminal);
for($j=0;$j<$i;$j++){
	echo "終點站".$Terminal[$j]."<br/>";
}
$a=count($seat);
for($j=0;$j<$i;$j++){
	echo "座位喜好".$site[$j]."<br/>";
}
echo "手機號碼:".$phonenumber."<br/>";
echo "Email:".$Email."<br/>";
echo "備註:".$note."<br/>";
?>