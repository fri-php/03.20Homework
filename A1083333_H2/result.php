
<?php
$id=$_POST["id"];
$ln=$_POST["ln"];
$gender=$_POST["gender"];
$ph=$_POST["ph"];
$email=$_POST["email"];
$st=$_POST["st"];
$ed=$_POST["ed"];
$sit=$_POST["sit"];
$points=$_POST["points"];
$tex=$_POST["tex"];
if ($st==$ed) 
{
	echo "訂票失敗,請檢查起點站與終點站"."<br>"."3秒後返回訂票介面";
	echo "<meta http-equiv='refresh' content='3;url=order.php' />";

}
else
{
	echo "<B>"."訂票成功"."</B>"."<br>";
	echo "訂票人:$id"."<br>";
	echo "學號:$ln"."<br>";
	echo "性別:$gender"."<br>";
	echo "連絡電話:$ph"."<br>";
	echo "信箱:$email"."<br>";
	echo "起點站:$st"."<br>";
	echo "終點站:$ed"."<br>";
	echo "座位喜好:$sit"."<br>";
	echo "訂購票數:$points"."<br>";
	echo "備註:"."<br>";
	foreach ($tex as $key => $value) 
	{
		echo $value."<br/>";
	}
	echo nl2br(htmlspecialchars($tex));


}








?>