<META HTTP-EQUIV="Content-Type" CONTENT="text/html;
charset=utf8">
<?php
echo "<center>";
echo "確認資料"."<br/>";
echo "</center>";

$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$ticket1=$_POST["ticket1"];
$ticket2=$_POST["ticket2"];
$ticket3=$_POST["ticket3"];
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$start=$_POST["start"];
$end=$_POST["end"];
$sit=$_POST["sit"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$comment=$_POST["comment"];


echo "<center>";
echo "<form>";
echo "<table bgcolor='' width='1250' border='6' style='border-width:8px;border-style:double;border-color:;padding:4px;'>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "姓名";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo $name."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "學號";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo $id."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "性別";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo $gender."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle' rowspan='4'>";
echo "票種及張數";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center' valign='middle'>";
echo $ticket1.$num1."張"."<br/>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center' valign='middle'>";
echo $ticket2.$num2."張"."<br/>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center' valign='middle'>";
echo $ticket3.$num3."張"."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle' rowspan='3'>";
echo "起訖與終點站";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "起點:".$start."<br/>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "終點:".$end."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "座位喜好";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo $sit."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "聯絡電話";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo $phone."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "電子信箱";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo $mail."<br/>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "備註";
echo "</td>";
echo "<td align='center' valign='middle'>";
echo nl2br(htmlspecialchars($comment));
echo "</td>";
echo "</tr>";


echo "</table>";
echo "</form>";
echo "</center>";
?>