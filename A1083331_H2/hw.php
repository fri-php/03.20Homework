<?php
$NA=$_POST["NA"];
$IDC=$_POST["IDC"];
$sex=$_POST["sex"];
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$A3=$_POST["A3"];
$A1=$_POST["A1"];
$A2=$_POST["A2"];
$prefer=$_POST["prefer"];
$CELL=$_POST["CELL"];
$mail=$_POST["mail"];
$BC=$_POST["BC"];
$ILL=$_POST["ILL"];
$FOD=$_POST["FOD"];
echo "HELLO". "<br/>" ;
echo "姓名:".$NA."<br/>"; 
echo "學號:".$IDC."<br/>";
echo "性別:".$sex."<br/>";
echo "起始站:".$s1."<br/>" ;
echo "終點站:". $s2."<br/>" ;
echo "一般票數". $A3."<br/>" ;
echo "敬老票數". $A1."<br/>" ;
echo "愛心票數:". $A2."<br/>" ;
echo "喜好座位:". $prefer."<br/>" ;
echo "電話:". $CELL."<br/>" ;
echo "信箱:". $mail."<br/>" ;
echo "備註:". $BC."<br/>" ;

echo nl2br(htmlspecialchars($BC))."<br/>";

echo "特殊疾病:";
foreach ($ILL as $key => $value) {
	echo $value.",";
} echo "<br/>";
echo "食物喜好:";
echo implode (",",$FOD)."<br/>";

$idd=$_POST["idd"];
$uidd=$_POST["uidd"];
$cid="111";
$cuid="123";
 

 
 
 if($idd=="111" && $uidd=="123")
 {
 	echo "login 成功";}
 	else{
 		echo "登入失敗，回到原本介面";
 		echo "<meta content='3; url=http://www.google.com.tw/' http-equiv='refresh'>";
 	}
 	

?>