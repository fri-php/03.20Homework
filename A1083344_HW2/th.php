<html>
<head>
	<title>確認頁面</title>

</head>
<body background="uCbne0.png" style="background-position:right;background-repeat: no-repeat;" >
<center><h1 style="background-color:#666666">感謝您的使用</h1></center>

</body>
</html>


<?php
$name=$_POST["name"];
$mail=$_POST["email"];
$tel=$_POST["tel"];
$id=$_POST["id"];
$s=$_POST["seat"];
$ticket=$_POST['ticket'];
$nn=$_POST["numbern"];
$nl=$_POST["numberl"];
$no=$_POST["numbero"];
$n= implode (",", $ticket);
$st=$_POST['start'];
$e=$_POST['end'];
echo $name."<br/>";
echo $mail."<br/>";
echo $tel."<br/>";
echo $id."<br/>";
echo $s."<br/>";
echo $n.$nn.$nl.$no."<br/>";
echo $st."<br/>";
echo $e."<br/>";

?>