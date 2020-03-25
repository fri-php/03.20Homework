<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
$id=$_POST["id"];
$password=$_POST["password"];
$uid="catgod";$upassword="cathuman";
$name=$_POST['name'];
$sn=$_POST['sn'];
$gender=$_POST["gender"];
$ticket1=$_POST['ticket1'];
$ticket2=$_POST['ticket2'];
$ticket3=$_POST['ticket3'];
$EndLocation=$_POST["EndLocation"];
$StartLocation=$_POST["StartLocation"];
$pref=$_POST["pref"];
$tel=$_POST["tel"];
$Content=$_POST["Content"];
if($id==$uid && $password==$upassword){
	echo "login success<br>";
}else{
	echo "login failed<br>"; 
}
echo $sn."<br>";
echo $gender."<br>";
echo $name."<br>";
echo $ticket1.'&nbsp'.$ticket2.'&nbsp'.$ticket3."<br>";
echo $EndLocation."<br>";
echo $StartLocation."<br>";
echo $pref."<br>";
echo $tel."<br>";
echo $Content;
echo $uid.'&nbsp'.$id.'&nbsp'.$password.'&nbsp'.$upassword;
?>