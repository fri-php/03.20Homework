<html>
<head>
	
</head>
<body bgcolor="#ccf2ff">
	
</body>
</html>

<?php

$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$quantity=$_POST["many"];
$ticket=$_POST["ticket"];
$start=$_POST["start"];
$end=$_POST["end"];
$seat=$_POST["seat"];
$number=$_POST["number"];
$mail=$_POST["mail"];
$comment=$_POST["comment"];

echo "姓名:".$name."<br/>";
echo "學號:".$id."<br/>";
echo "性別:".$gender."<br/>";
echo "票數:".$quantity."<br/>";
echo "票種:".$ticket."<br/>";
echo "起點:".$start."~終點
:".$end."<br/>";
echo "座位喜好:".$seat."<br/>";
echo "連絡電話:".$number."<br/>";
echo "信箱:".$mail."<br/>";
echo nl2br(htmlspecialchars($comment));

?>