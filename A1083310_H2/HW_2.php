<?php


$name=$_POST["name"];
$idnum=$_POST["idnumber"];
$gender=$_POST["gender"];
$anumber=$_POST["a-number"];
$bnumber=$_POST["b-number"];
$cnumber=$_POST["c-number"];
$start=$_POST["start"];
$end=$_POST["end"];
$seat=$_POST["seat"];
$phone=$_POST["phone"];
$emaill=$_POST["emaill"];
$more=$_POST["more"];

echo
	 "您的訂票資訊"."<br/>"."<br/>";
echo
	"姓名：".$name."<br/>";
echo
	"學號：".$idnum."<br/>";

echo
	"性別：";
if($gender==F)
echo "女性"."<br/>";	
else
echo "男性"."<br/>";

echo
	"票種與數量：";
if($anumber!=0)
echo "全票".$anumber."張";
if($bnumber!=0)
echo "／敬老票".$bnumber."張";
if($cnumber!=0)
echo "／愛心票".$cnumber."張";
echo "<br/>";

echo "起訖站：";
if($start==M01)
echo "管理學院 → ";
else if($start==L02)
echo "法學院 → ";
else if($start==L01)
echo "圖資大樓 → ";
else if($start==C02)
echo "理學院 → ";
else if($start==P01)
echo "學二宿舍 → ";
else if($start==C01)
echo "工學院 → ";
else if($start==P02)
echo "行政大樓 → ";


if($end==M01)
echo "管理學院";
else if($end==L02)
echo "法學院";
else if($end==L01)
echo "圖資大樓";
else if($end==C02)
echo "理學院";
else if($end==P01)
echo "學二宿舍";
else if($end==C01)
echo "工學院";
else if($end==P02)
echo "行政大樓";
echo "<br/>";

echo "座位喜好：";
if($seat==none)
echo "無"."<br/>";
else if($seat==window)
echo "靠窗"."<br/>";
else if($seat==aisle)
echo "靠走道"."<br/>";

echo "連絡電話：".$phone."<br/>";

echo "電子信箱：".$emaill."<br/>";

echo "備註：".$more."<br/>";

echo "<br/>"."<br/>"."為保護您的資料，若您無任何動作，60秒後頁面將自動跳轉回首頁。"."<meta http-equiv='refresh' content='60;url=order.html' />";

?>