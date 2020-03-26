
<html>
	<head>
			<style>
				body {background-color: #F4E1C6;}
				h1   {color: #1a8cff;}
			</style>
	</head>
</html>


<?php


echo "<h1>訂票資料</h1> ";

$name=$_POST["name"];
$id=$_POST["id"];
$sex=$_POST["sex"];
$start=$_POST["start"];
$end=$_POST["end"];
$adult=$_POST["adult"];
$elder=$_POST["elder"];
$disabled=$_POST["disabled"];
$seat=$_POST["seat"];
$pn=$_POST["pn"];
$email=$_POST["email"];
$comment=$_POST["comment"];

	echo "<b>姓名：</b>".$name."<br/>";
	echo "<b>性別</b>：".$sex."<br/>";
	echo "<b>學號</b>：".$id."<br/>";

	echo "<table border=1>";
	echo "<tr>";
	echo "<td>"."起站"."</td>";
	echo "<td>";
	echo $start;
	echo "</td>";
	echo "<td>"."迄站"."</td>";
	echo "<td>";
	echo $end;
	echo "</td>";

	echo "<b>全票</b>：".$adult."<br/>";
	echo "<b>敬老票</b>：".$elder."<br/>";
	echo "<b>愛心票</b>：".$disabled."<br/>";
	echo "<b>座位喜好</b>：".$seat."<br/>";

	echo "<b>連絡電話</b>：".$pn."<br/>";
	echo "<b>電子信箱</b>：".$email."<br/>";
	echo "<b>備註</b>：".nl2br($comment);

	

	echo "<br/>";


?>
