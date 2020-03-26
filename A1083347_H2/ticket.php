<?php

$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$ticket=$_POST["ticket"];
$starting=$_POST["starting"];
$destination=$_POST["destination"];
$seat=$_POST["seat"];
$number=$_POST["number"];
$mail=$_POST["mail"];

echo "姓名".$name."<br/>";
echo "學號".$id."<br/>";
echo "性別".$gender."<br/>";
echo "票種".$ticket."<br/>";
echo "起點站".$starting."<br/>";
echo "終點站".$destination."<br/>";
echo "座位".$seat."<br/>";
echo "手機號碼".$number."<br/>";
echo "信箱".$mail."<br/>";

?>