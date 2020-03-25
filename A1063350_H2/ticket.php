<html>
	<meta charset="utf-8">
</html>

<?php

	$na=$_POST["na"];
	echo "姓名：".$na."<br/>";
	$id=$_POST["id"];
	echo "學號：".$id."<br/>";
	$gender=$_POST["gender"];
	echo "性別：".$gender."<br/>";
	$ticket=$_POST["ticket"];
	echo "票數：".$ticket."&emsp;";
	$ticketnum=$_POST["ticketnum"];
	echo "幾張：".$ticketnum."<br/>";
	$start=$_POST["start"]."&nbsp;";
	echo $start."到"."&nbsp;";
	$end=$_POST["end"];
	echo $end."<br/>";
	$set=$_POST["set"];
	echo "座位喜好：".$set."<br/>";
	$phone=$_POST["phone"];
	echo "連絡電話：".$phone."<br/>";
	$email=$_POST["email"];
	echo "信箱：".$email."<br/>";
	$comment=$_POST["comment"]."<br/>";
	echo "備註：".nl2br(htmlspecialchars($comment))."<br/>";

?>