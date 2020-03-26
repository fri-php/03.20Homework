<html>
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
$favorite=$_POST["favorite"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$other=$_POST["other"];

echo "<b>姓名：</b>".$name."<br/>";
echo "<b>性別</b>：".$sex."<br/>";
echo "<b>學號</b>：".$id."<br/>";
echo "<b>全票</b>：".$adult."<br/>";
echo "<b>敬老票</b>：".$elder."<br/>";
echo "<b>愛心票</b>：".$disabled."<br/>";

echo "<tr>";
echo "<td>"."起點站"."</td>";
echo "<td>";
echo $start;
echo "</td>";
echo "<td>"."終點站"."</td>";
echo "<td>";
echo $end;
echo "</td>";

echo "<b>座位喜好</b>：".$favorite."<br/>";
echo "<b>連絡電話</b>：".$phone."<br/>";
echo "<b>電子信箱</b>：".$mail."<br/>";
echo "<b>備註</b>：".nl2br($other);
echo "<br/>";


?>