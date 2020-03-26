<html>
<head>
	<title>A1083338 訂票頁面</title>
</head>
<body>
	<H1><CENTER>歡迎來到高大校園鐵路訂票網站</CENTER></H1><br>
	<H2><CENTER>歡迎來到高大校園鐵路訂票網站</CENTER></H2><br>
	<H3><CENTER>歡迎來到高大校園鐵路訂票網站</CENTER></H3><br>
	<H4><CENTER>歡迎來到高大校園鐵路訂票網站</CENTER></H4><br>
	<H5><CENTER>歡迎來到高大校園鐵路訂票網站</CENTER></H5><br>
	<H6><CENTER>歡迎來到高大校園鐵路訂票網站</CENTER></H6><br>
	<a href="price.php" ALIGN=middle><img src="http://upload.cc/i1/2020/03/11/uCbne0.png" border="0"></a>
	<form action="submit.php" method="post">
		姓名:<input type='text' name=name placeholder="請填寫全名" required><br>
		學號:<input type='text' name=id required><br>
		性別:<input type='radio'name='gender'value='M'>男
			<input type='radio'name='gender'value='F'>女<br>
		票數:<select name='ticket'required>
			<option value=00>請選擇</option>
			<option value=01>全票</option>
			<option value=02>敬老票</option>
			<option value=03>愛心票</option>
		數量:<input type='text' name=num placeholder="數量"required><br>
		起點:<select name='start'required>
			<option value=a0>請選擇</option>
			<option value=a1>管理學院</option>
			<option value=a2>法學院</option>
			<option value=a3>圖資</option>
			<option value=a4>理學院</option>
			<option value=a5>學二宿舍</option>
			<option value=a6>工學院</option>
			<option value=a7>行政大樓</option>
			</select>
		終點:<select name='end'required>
			<option value=b0>請選擇</option>
			<option value=b1>管理學院</option>
			<option value=b2>法學院</option>
			<option value=b3>圖資</option>
			<option value=b4>理學院</option>
			<option value=b5>學二宿舍</option>
			<option value=b6>工學院</option>
			<option value=b7>行政大樓</option>
			</select><br>
		連絡電話:<input type='text' name=phnum required><br>
		信箱:<input type='email' name=email required><br>
		備註:<br>
		<textarea name=note cols="40" rows="5"></textarea><br>
		<input type='submit' value='送出'>
		<input type='reset' value="重新輸入"><br>
	</form>
</body>
</html>