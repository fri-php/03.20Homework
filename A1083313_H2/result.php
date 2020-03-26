<html>
<?php
$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$tickets=$_POST["tickets"];
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$station1=$_POST["station1"];
$station2=$_POST["station2"];
$seat=$_POST["seat"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$comment=$_POST["comment"];
?>
<meta charset="utf-8">
<center>
<style>
table, th, td 
{
  border: 1px solid black;
  table-layout: fixed;
}
</style>
<table bgcolor="#FFFACD" style="width:60%">
<tr>
	<td>姓名</td>
	<td><?php echo $name; ?></td>
</tr>
<tr>
	<td>學號</td>
	<td><?php echo $id; ?></td>
</tr>
<tr>
	<td>性別</td>
	<td><?php foreach ($gender as $key => $value) {
		echo $value;} ?></td>
</tr>
<tr>
	<td>票種</td>
	<td><?php echo implode("-",$tickets); ?></td>
</tr>
<tr>
	<td>張數</td>
	<td><?php echo "全票".$num1."愛心票".$num2."敬老票".$num3; ?></td>
</tr>
<tr>
	<td>起點</td>
	<td><?php echo $station1; ?></td>
</tr>
<tr>
	<td>終點</td>
	<td><?php echo $station2; ?></td>
</tr>
<tr>
	<td>座位喜好</td>
	<td><?php echo $seat; ?></td>
</tr>
<tr>
	<td>連絡電話</td>
	<td><?php echo $phone; ?></td>
</tr>
<tr>
	<td>電子郵件</td>
	<td><?php echo $mail; ?></td>
</tr>
<tr>
	<td>備註</td>
	<td><?php echo $comment; ?></td>
</tr>	
</table>
</center>
</html>