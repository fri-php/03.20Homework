<?php
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$num=$_POST["num"];
$email=$_POST["email"];
$station=$_POST["station"];
$nextstation=$_POST["nextstation"];
$Ticket=$_POST["Ticket"];
$vip=$_POST["vip"];
$gender=$_POST["gender"];
$comment=$_POST["comment"];


echo $id ."<br/>";
echo $pwd."<br/>";
echo $num."<br/>";
echo $email."<br/>";
echo $station."<br/>";
echo $nextstation."<br/>";
echo $Ticket."<br/>";
echo $vip."<br/>";
echo $gender."<br/>";


echo nl2br(htmlspecialchars($comment));
?>
