<html>
<head>
	<meta charset="utf-8">
	<title>A1083337 訂票頁面</title>
</head>
<body background="images (1).png">
	<form action="ticket.php" method="post">
	<font face="標楷體">
	<center>
	<h1>歡迎</h1>
	<h2>歡迎</h2>
	<h3>歡迎</h3>
	<h4>歡迎</h4>
	<h5>歡迎</h5>
	<h6>歡迎</h6>
<hr>
<b>
<font color="green">點擊圖片查詢票價<p></font></b>
<a href=price.php ><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a><p>
	

	請輸入姓名*：<input type='text' name=ID placeholder="name" required><br>
	請輸入學號*：<input type='text' name=id placeholder="number" required><p>

	性別*：
		女<input type='radio' vale="F" name="gender" value="F" required>
		男<input type="radio" name="gender" value="M">
		LGBT<input type="radio" name="gender" value="L"><p>

	請選擇票數*：全票<input type=text name="number1" placeholder="number" required>
		敬老票<input type=text name="number2" placeholder="number" required>
		愛心票<input type=text name="number3" placeholder="number" required><p>

	起訖站*：<select name="station" required>
		<option value="1">管理學院</option>
		<option value="2">法學院</option>
		<option value="3">圖資</option>
		<option value="4">理學院</option>
		<option value="5">學二宿舍</option>
		<option value="6">工學院</option>
		<option value="7">行政大樓</option>
	</select><br>

	終點站*:<select name="end" required>
		<option value="01">管理學院</option>
		<option value="02">法學院</option>
		<option value="03">圖資</option>
		<option value="04">理學院</option>
		<option value="05">學二宿舍</option>
		<option value="06">工學院</option>
		<option value="07">行政大樓</option>
	</select><br>

	座位喜好*：<input type="text" name="seat" placeholder="seat" required><p>
	連絡電話*：<input type="text" name="ph" placeholder="phone number" required><br>
	信箱*：<input type="email" name="mail" required placeholder="mail"><p>

	備註：<br>
	<textarea cols=60 rows=6 name="textblock">
	</textarea><p>
	</font>
	<input type="submit" name="送出" value="送出">
	<input type="reset" name="重新輸入" value="重新輸入">

	</center>
</font>

</form>



</body>
</html>