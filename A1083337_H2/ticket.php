
<?php

	$ID=$_POST["ID"];
	$id=$_POST["id"];
	$gender=$_POST["gender"];
	$number1=$_POST["number1"];
	$number2=$_POST["number2"];
	$number3=$_POST["number3"];
	$station=$_POST["station"];
	$end=$_POST["end"];
	$seat=$_POST["seat"];
	$ph=$_POST["ph"];		
	$mail=$_POST["mail"];
	$textblock=$_POST["textblock"];

	echo "name:"$ID."<br/>";
	echo "student ID:"$id."<br/>";
	echo "gender:"$gender."<br/>";
	echo "start:"$station."<br/>";
	echo "Full ticket:"$number1."<br/>";
	echo "Respect ticket:"$number2."<br/>";
	echo "Handicapped ticket"$number3."<br/>";
	echo "end:"$end."<br/>";
	echo "seat prefer"$seat."<br/>";
	echo "phone:"$ph."<br/>";
	echo "mail:"$mail."<br/>";
	echo "note:"nl2br($textblock)."<br/>";

?>