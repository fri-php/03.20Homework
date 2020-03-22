<!DOCTYPE html>
<html>
<head>
	<title>A1083333 訂票頁面</title>

</head>
<body style="background-color: #F0F1A6;">
	<form action="result.php" method="POST">
	<p align="center">
		<h1 align="center">歡迎使用</h1>
		<h2 align="center">歡迎使用</h2>
		<h3 align="center">歡迎使用</h3>
		<h4 align="center">歡迎使用</h4>
		<h5 align="center">歡迎使用</h5>
		<h6 align="center">歡迎使用</h6><br>
		<p align="center"><a href="price.html"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a></p>
	</p>
	<p align="center">
		訂票:<br>
		姓名:<input type="text" required="required" name="id"><br/>
		學號:<input type="text" required="required" name="ln"><br/>
		<input type="radio" value="男" required="required" name="gender">男
		<input type="radio" value="女" required="required" name="gender">女<br/>
		連絡電話:<input type="text" required="required" name="ph"><br/>
		信&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:<input name="email" id="email" type="email" required /><br/>
		起點:
		<select name="st" required />
		<option value="管理學院">管理學院</option>
		<option value="法學院">法學院</option>
		<option value="圖資">圖資</option>
		<option value="理學院">理學院</option>
		<option value="學二宿舍">學二宿舍</option>
		<option value="工學院">工學院</option>
		<option value="行政大樓">行政大樓</option>
		</select>
		終點:
		<select name="ed" required />
		<option value="管理學院">管理學院</option>
		<option value="法學院">法學院</option>
		<option value="圖資">圖資</option>
		<option value="理學院">理學院</option>
		<option value="學二宿舍">學二宿舍</option>
		<option value="工學院">工學院</option>
		<option value="行政大樓">行政大樓</option>
		</select><br>
		座位喜好:
		<input type="radio" value="無" required / name="sit">無
		<input type="radio" value="靠窗" required / name="sit">靠窗
		<input type="radio" value="靠走道" required / name="sit">靠走道
		<br>
		票數:<input type="number" name="points" min="1" max="10" value="1" required="required"><br>
		備註:<br>
		<textarea cols="80" rows="10" name="tex"></textarea><br/>
		<input type="reset" value="全部重填">
		<input type="submit" value="我要訂票"><br/>

	</p>
	</form>



</body>
</html>