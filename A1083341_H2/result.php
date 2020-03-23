<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>


</html>
<?php

$name=        $_POST["name"];
$schoolid=    $_POST["schoolid"];
$gender=      $_POST["gender"];
$ticketnumber=$_POST["ticketnumber"];
$sick=        $_POST["sick"];
$sickto=      $_POST["sickto"];
$coun=        $_POST["coun"];
$start=       $_POST["start"];
$terminal=    $_POST["terminal"];
$seat=        $_POST["seat"];
$phones=      $_POST["phones"];
$email=       $_POST["email"];
$comment=     $_POST["comment"];

echo "Hello PHP";
	
echo $name."<br/>";
echo $schoolid."<br/>";
echo $gender."<br/>";
echo $ticketnumber."<br/>";


$i=count($sick);
echo "疾病:";
for ($j=0; $j <$i ; $j++)
	{
		echo $sick[$j].",";
	};
echo "<br/>";

echo "過敏原:";
foreach ($sickto as $key => $value)
	{
		echo $value.",";
	}
echo "<br/>";

echo "去過之國家:";
echo implode(",",$coun);
echo "<br/>";

echo $start."<br/>";
echo $terminal."<br/>";
echo $seat."<br/>";
echo $phones."<br/>";
echo $email."<br/>";

echo nl2br(htmlspecialchars($comment));

?>