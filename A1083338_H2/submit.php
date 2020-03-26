<?php

$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$ticket=$_POST["ticket"];
$num=$_POST["num"];
$start=$_POST["start"];
$end=$_POST["end"];
$phnum=$_POST["phnum"];
$mail=$_POST["email"];
$note=$_POST["note"];

echo "name=".$name."<br/>";
echo "id=".$id."<br/>";
echo "gender=".$gender."<br/>";
echo "ticket=".$ticket."<br/>";
echo "num=".$num."<br/>";
echo "start=".$start."<br/>";
echo "end=".$end."<br/>";
echo "phonenumber=".$phnum."<br/>";
echo "email=".$mail."<br/>";
echo "note:".nl2br($note)."<br/>";

?>