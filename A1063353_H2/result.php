<?php  

echo "訂票明細"."<br/>"."<br/>";

$name=$_POST["name"];
$id=$_POST["id"];
$love=$_POST["love"];
$call=$_POST["call"];
$sex = $_POST["sex"];
$p = $_POST["p"];
$s1 = $_POST["s1"]; 
$s2 = $_POST["s2"];


echo "姓名:". $name."<br/>";
echo "學號:". $id."<br/>";
echo "性別:".  $sex."<br/>";
echo "票種:".  $p."<br/>";
echo "起始站:".$s1."<br>";
echo "終點站:".$s2."<br>";
echo "座位喜好:". $love."<br/>";
echo "聯絡電話:".  $call."<br/>";







?>