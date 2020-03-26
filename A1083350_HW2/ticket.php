<?php
	$fname=$_POST["fname"];
	$id=$_POST["id"];
	$Sex=$_POST["Sex"];
	$ticket=$_POST["ticket"];
	$start=$_POST["start"];
	$end=$_POST["end"];
	$sit=$_POST["sit"];
	$tel=$_POST["tel"];
	$email=$_POST["email"];
	
	echo 訂單內容：."<br>";
	echo 姓名：.$fname."<br>";
	echo 學號：.$id."<br>";
	echo 性別：.$Sex."<br>";
	echo 訂票：.$ticket."<br>";
	echo 起訖站：.$start."<br>";
	echo 終點站：.$end."<br>";
	echo 座位：.$sit."<br>";
	echo 聯絡號碼：.$tel."<br>";
	echo 電子郵件：.$email."<br>";

?>