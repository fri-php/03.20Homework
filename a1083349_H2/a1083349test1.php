<!DOCTYPE html>
<META HTTP-EQUIV="Content-TYPE" CONTENT="text/html; charset=utf8">
<html>
<form action="http://localhost/a1083349hw2.php" method="POST">
<head>
	<title>A1083349 訂票頁面</title>
</head>
<body>
	<center><h1>歡迎搭乘高大校園環狀鐵路</h1>
	<h2>這是我們新推出的服務</h2>
	<h3>歡迎歡迎歡迎您</h3>
	<h4>歡迎您使用我們的訂票系統</h4>
	<h5>祝您有個愉快的一天</h5>
	<h6>謝謝</h6></center>
	<center><a href="price.html"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a></center>
<center><form>
<table style="border:3px #FFD382 dashed;" cellpadding="10" border='1'>
	<tr>
	<td>名字</td>
	<td><input type="text" name="id" required="required"><br></td>
	</tr>
	<tr>
	<td>學號</td>
	<td><input type="text" name="num" required="required"><br></td>
	</tr>
	<tr>
	<td>性別</td>
	<td>男<input type="radio" value="男" name="gender">
	女<input type="radio" value="女" name="gender"><br></td>
	</tr>
	<tr>
	<td>票數</td>
	<td>全票<select name="all">
		<option value="0">零張</option>
		<option value="1">一張</option>
		<option value="2">二張</option>
		<option value="3">三張</option>
	</select>
	敬老票<select name="old">
		<option value="0">零張</option>
		<option value="1">一張</option>
		<option value="2">二張</option>
		<option value="3">三張</option>
	</select>
	愛心票<select name="heart">
		<option value="0">零張</option>
		<option value="1">一張</option>
		<option value="2">二張</option>
		<option value="3">三張</option>
	</select><br>
</td></tr>
	<tr>
	<td>起迄站</td>
	<td>起點<select name="start" required>
		<option value="管理學院">管理學院</option>
		<option value="法學院">法學院</option>
		<option value="圖資">圖資</option>
		<option value="理學院">理學院</option>
		<option value="學二宿舍">學二宿舍</option>
		<option value="工學院">工學院</option>
		<option value="行政大樓">行政大樓</option>
	</select>
	終點<select name="end" required>
		<option value="管理學院">管理學院</option>
		<option value="法學院">法學院</option>
		<option value="圖資">圖資</option>
		<option value="理學院">理學院</option>
		<option value="學二宿舍">學二宿舍</option>
		<option value="工學院">工學院</option>
		<option value="行政大樓">行政大樓</option>
	</select><br></td></tr>
<tr>
	<td>座位喜好</td>
	<td>靠窗<input type="radio" value="靠窗" name="place">
靠走道<input type="radio" value="走道" name="place"><br>
</td></tr>
<tr>
<td>
連絡電話
</td>
<td><input type="text" name="tel" required="required"><br>
</td></tr>
<tr><td>
信箱</td>
<td><input type="email" name="user_email" placeholder="ex:abc@gmail.com" required="required"><br>
</td></tr>
<tr><td>備註</td>
	<td><textarea cols="80" rows="10" name="comment"></textarea></textarea></td></tr>
<tr><td></td><td><center><input type="reset" value="全部重填"><input type="submit" value="我要訂票"></center></td></tr>
</table>
</form>
</center>
</body>
</html>