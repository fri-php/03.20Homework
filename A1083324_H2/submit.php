<?php


header("Content-Type:text/html; charset=utf-8");

$name=$_POST["name"];
$num=$_POST["num"];
$gender=$_POST["gender"];
$ticket=$_POST["ticket"];
$ticnum=$_POST["ticnum"];
$start=$_POST["start"];
$arrival=$_POST["arrival"];
$seat=$_POST["seat"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$comment=$_POST["comment"];

echo "謝謝您的訂購"."</br>"."以下是您的訂購資訊"."</br>"."請您確認"."</br>";
echo "您的姓名是:".$name."</br>";
echo "您的學號是:".$num."</br>";

if ($gender==M) {
	echo "您的性別是:男"."</br>";
}
else{
	echo "您的性別是:女"."</br>";
}

if ($ticket==normal) {
	echo "您的票種是:全票"."</br>";
}
elseif ($ticket==old) {
	echo "您的票種是:敬老票"."</br>";
}
else {
	echo "您的票種是:愛心票"."</br>";
}
echo "您的票數是:".$ticnum."</br>";

if ($start==m1) {
	echo "您的起始站是:管院"."</br>";
}
elseif ($start==low1) {
	echo "您的起始站是:法學院"."</br>";
}
elseif ($start==lib1) {
	echo "您的起始站是:圖資"."</br>";
}
elseif ($start==ch1) {
	echo "您的起始站是:理學院"."</br>";
}
elseif ($start==live1) {
	echo "您的起始站是:學二宿舍"."</br>";
}
elseif ($start==c1) {
	echo "您的起始站是:工學院"."</br>";
}
else {
	echo "您的起始站是:行政大樓"."</br>";
}

if ($arrival==m2) {
	echo "您的終點站是:管院"."</br>";
}
elseif ($arrival==low2) {
	echo "您的終點站是:法學院"."</br>";
}
elseif ($arrival==lib2) {
	echo "您的終點站是:圖資"."</br>";
}
elseif ($arrival==ch2) {
	echo "您的終點站是:理學院"."</br>";
}
elseif ($arrival==live2) {
	echo "您的終點站是:學二宿舍"."</br>";
}
elseif ($arrival==c2) {
	echo "您的終點站是:工學院"."</br>";
}
else {
	echo "您的終點站是:行政大樓"."</br>";
}

if ($seat==outside) {
	echo "您的座位偏好是:靠近走道"."</br>";
}
elseif ($seat==inside) {
	echo "您的座位偏好是:靠近窗戶"."</br>";
}
else {
	echo "您的座位偏好是:無"."</br>";
}

echo "您的電話號碼是:".$phone."</br>";
echo "您的電子郵件是:".$email."</br>";
echo "您的備註:".$comment."</br>";


?>