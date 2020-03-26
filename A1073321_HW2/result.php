<?php
"<meta charset='utf-8'>";
$nam=$_POST[nam];
$std=$_POST[std];
$gra=$_POST[gra];
$num1=$_POST[num1];
$num2=$_POST[num2];
$num3=$_POST[num3];
$str=$_POST[str];
$end=$_POST[end];
$sit=$_POST[sit];
$tel=$_POST[tel];
$mail=$_POST[mail];
$comm=$_POST[comm];

//echo nl2br($comm);new line to br/
echo "姓名:".($nam)."<br/>";
echo "學號:".($std)."<br/>";
echo "性別:".($gra)."<br/>";
echo "全票:".($num1)."<br/>";
echo "敬老票:".($num2)."<br/>";
echo "愛心票:".($num3)."<br/>";
echo "起站:".($str)."<br/>";
echo "訖站:".($end)."<br/>";
echo "座位偏好:".($sit)."<br/>";
echo "電話:".($tel)."<br/>";
echo "電子郵件:".($mail)."<br/>";
echo "備註:".nl2br(htmlspecialchars ($comm))."<br/>";
?>