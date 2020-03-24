<style>
.css{
	font-size: 18px;
	margin-left:auto; 
	margin-right:auto;
	font-family: Microsoft JhengHei;
	border:3px solid black;
	border-collapse: collapse;
	}
</style>
<?php

$name=$_POST["name"];
$id=$_POST["id"];
$gen=$_POST["gender"];
$sta=$_POST["start"];
$end=$_POST["end"];
$adu=$_POST["adult"];
$old=$_POST["old"];
$dis=$_POST["disabled"];
$sp=$_POST["SeatPreference"];
$pho=$_POST["phone"];
$email=$_POST["email"];
$notes=$_POST["notes"];

echo "<table class=css border=1>";
echo "<tr>";
	echo "<td>"."姓名：".$name."</td>";
	echo "<td>"."性別：".$gen."</td>";
	echo "<td colspan='2' >"."學號：".$id."</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>"."起站"."</td>";
	echo "<td>";
	echo $sta;
	echo "</td>";
	echo "<td>"."迄站"."</td>";
	echo "<td>";
	echo $end;
	echo "</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>"."全票：".$adu."</td>";
	echo "<td>"."敬老票：".$old."</td>";
	echo "<td>"."愛心票：".$dis."</td>";
	echo "<td>"."座位喜好：".$sp."</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>"."連絡電話"."</td>"."<td>".$pho."</td>";
	echo "<td>"."電子信箱"."</td>"."<td>".$email."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."備註"."</td>"."<td colspan='3'>".$notes."</td>";
echo "</tr>";
echo "</table>";
?>