<?php

$name=$_POST["name"];
$ID=$_POST["ID"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$go=$_POST["go"];
$end=$_POST["end"];
$全票=$_POST["全票"];
$敬老票=$_POST["敬老票"];
$愛心票=$_POST["愛心票"];
$Window=$_POST["Window"];
$Aisle=$_POST["Aisle"];

echo $name."<br/>";
echo $ID."<br/>";
echo $gender."<br/>";
echo $phone."<br/>";
echo $email."<br/>";
echo $go."<br/>";
echo $end."<br/>";
echo $全票."<br/>";
echo $敬老票."<br/>";
echo $愛心票."<br/>";
echo $Window."<br/>";
echo $Aisle."<br/>";

echo nl2br(phpspecailchars($comment))

?>