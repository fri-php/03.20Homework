<html>
<font face="微軟正黑體, Arial">
<?php

$id=$_POST["id"];
$a10833=$_POST["a10833"];
$gender=$_POST["gender"];
$telephone=$_POST["telephone"];
$mail=$_POST["mail"];
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$station1=$_POST["station1"];
$station2=$_POST["station2"];
$sit=$_POST["sit"];
$note=$_POST["note"];
?>
<meta charset="utf-8">

<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<center><table>
<caption><h1>後臺數據</h1></caption>
<tr>
	<td><center>姓名</center></td>
	<td><?php echo $id; ?></td>
</tr>
<tr>
	<td><center>學號</center></td>
	<td><?php echo $a10833; ?></td>
</tr>
<tr>
	<td><center>性別</center></td>
	<td><?php echo $gender; ?></td>
</tr>
<tr>
	<td><center>電話</center></td>
	<td><?php echo $telephone; ?></td>
</tr>
<tr>
	<td><center>信箱</center></td>
	<td><?php echo $mail; ?></td>
</tr>
<tr>
	<td><center>票數</center></td>
	<td><?php echo "全票 ".$num1." 張"."、"."敬老票 ".$num2." 張"."、"."愛心票 ".$num3." 張"; ?></td>
</tr>
<tr>
	<td><center>起訖站</center></td>
	<td><?php echo "起點：".$station1."－－－終點：".$station2; ?></td>
</tr>
<tr>
	<td><center>座位喜好</center></td>
	<td><?php echo $sit; ?></td>
</tr>
<tr>
	<td><center>備註</center></td>
	<td><?php echo $note; ?></td>
</tr>
</table></center>
</font>

</html>