<META HTTP-EQUIV="Content-TYPE" CONTENT="text/html; charset=utf8">
<?php
 $id=$_POST["id"];
 $num=$_POST["num"];
 $gender=$_POST["gender"];
 $all=$_POST["all"];
 $old=$_POST["old"];
 $heart=$_POST["heart"];
 $start=$_POST["start"];
 $end=$_POST["end"];
 $place=$_POST["place"];
 $tel=$_POST["tel"];
 $user_email=$_POST["user_email"];
 $comment=$_POST["comment"];
?>
<html>
<body>
<center>
<table style='border:3px #062d65 dashed;' width='500' cellpadding='10' border='1'>
<tr>
<td align='center' valign='middle' width="150">	
 學生姓名
</td>
<td align='center' valign='middle'>
 <?php echo $id."<br/>"; ?>
</td>
</tr>

<tr>
<td align='center' valign='middle' width="150">
 學生學號
 </td>
 <td align='center' valign='middle'>
 <?php echo $num."<br/>"; ?>
 </td>
</tr>

<tr>
<td align='center' valign='middle' width="150">
 學生性別
 </td>
 <td align='center' valign='middle'>
 <?php echo $gender."<br/>"; ?>
 </td>
</tr>

<tr>
<td align='center' valign='middle' width="150">
 全票數量
 </td>
 <td align='center' valign='middle'>
 <?php echo $all."<br/>"; ?>
 </td>
</tr>

<tr>
<td align='center' valign='middle' width="150">
 敬老票數
 </td>
 <td align='center' valign='middle'>
 <?php echo $old."<br/>"; ?>
 </td>
 </tr>

 <tr>
<td align='center' valign='middle' width="150">
 愛心票數
 </td>
 <td align='center' valign='middle'>
 <?php echo $heart."<br/>"; ?>
 </td>
 </tr>

<tr>
<td align='center' valign='middle' width="150">
 起點站
 </td>
 <td align='center' valign='middle'>
 <?php echo $start."<br/>"; ?>
 </td>
</tr>

 <tr>
 <td align='center' valign='middle' width="150">
 終點站
 </td>
 <td align='center' valign='middle'>
 <?php echo $end."<br/>"; ?>
 </td>
</tr>

<tr>
 <td align='center' valign='middle' width="150">
 座位喜好
 </td>
 <td align='center' valign='middle'>
 <?php echo $place."<br/>"; ?>
 </td>
</tr>

<tr>
 <td align='center' valign='middle' width="150">
 學生聯絡電話
 </td>
 <td align='center' valign='middle'>
 <?php echo $tel."<br/>"; ?>
 </td>
</tr>

<tr>
 <td align='center' valign='middle' width="150">
 學生聯絡信箱
 </td>
 <td align='center' valign='middle'>
 <?php echo $user_email."<br/>"; ?>
 </td>
</tr>

<tr>
 <td align='center' valign='middle' width="150">
 備註
 </td>
 <td align='center' valign='middle'>
 <?php echo nl2br(htmlspecialchars($comment)); ?>
 </td>
</tr>

</table>
</center>
</body>
</html>