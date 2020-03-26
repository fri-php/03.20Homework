<?php
	$id=$_POST["id"];
	$pwd=$_POST["pwd"];

	$uid="a1083350";
	$upwd="123456";

	if ($id==$uid && $pwd==$upwd) {
		echo "Login Success";
		header("Location:order.php");
	}else{
		echo "<center><h1>Login Failed! <br> Please try again!</h1>";
		echo "<meta http-equiv='refresh' content='3;url=index.php'/>";
	}
?>