<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</html>
<?php

echo $_POST["name"]."<br/>";
echo $_POST["gender"]."<br/>";
echo $_POST["tel"]."<br/>";
echo $_POST["email"]."<br/>";

echo count($_POST["ticket"])."<br/>";
foreach ($ticket as $key => $value) {
	echo "ticket:".$value;
}
echo $_POST["ticket"]."<br/>";
echo $_POST["special"]"<br/>";
if (isset($_POST["number"]))
{
    $numToDel = $_POST["number:"];
}

?>
