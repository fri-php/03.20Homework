<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/ht-ml; charset=utf8">
<link rel=stylesheet type="text/css" href="all.css">
</style>
<title>
A1083308&nbsp;訂票頁面
</title>
	
</head>
<body>
<H1>歡迎來到高大環鐵訂票系統</H1>	
<H2>歡迎來到高大環鐵訂票系統</H2>
<H3>歡迎來到高大環鐵訂票系統</H3>
<H4>歡迎來到高大環鐵訂票系統</H4>
<H5>歡迎來到高大環鐵訂票系統</H5>
<H6>歡迎來到高大環鐵訂票系統</H6>
<center>
<a href="price.php"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a><br/>
點擊LOGO查詢票價資訊
</center>
<form action="result.php" method="POST">
	<table id="t1">
		<tr>
			<td>姓名：</td>
			<td>
				<input type="text" name="name" placeholder="請輸入姓名" required="required">
			</td>
		</tr>
		<tr>
			<td>學號：</td>
			<td>
				<input type="password" name="id" placeholder="請輸入學號" required="required">
			</td>
		</tr>
		<tr>
		<td>性別：</td>
		<td>
			<select name="gender">
				<option value="M">男</option>
				<option value="F">女</option>	
			</select>
		</td>
	</tr>
	<tr>
		<td>起站：
			<select name="start">
				<option value="man" selected>管理學院</option>
				<option value="law">法學院</option>
				<option value="lib">圖資</option>
				<option value="sci">理學院</option>
				<option value="dor">學二宿舍</option>
				<option value="eng">工學院</option>
				<option value="adm">行政大樓</option>
			</select>
		</td>
		<td>迄站：
			<select name="end">
				<option value="man" selected>管理學院</option>
				<option value="law">法學院</option>
				<option value="lib">圖資</option>
				<option value="sci">理學院</option>
				<option value="dor">學二宿舍</option>
				<option value="eng">工學院</option>
				<option value="adm">行政大樓</option>
		</td>
	</tr>
	<tr>
		<td>票數：</td>
		<td>
			全票<input type="number" name="adult" value="0" min="0">張<br/>
			敬老票<input type="number" name="old" value="0" min="0">張<br/>
			愛心票<input type="number" name="disabled" value="0" min="0">張<br/>
		</td>
	</tr>
	<tr>
		<td>座位喜好</td>
		<td><input type="radio" name="SeatPreference" value="x">不指定
			<input type="radio" name="SeatPreference" value="w">靠窗優先
			<input type="radio" name="SeatPreference" value="a">走道優先
		</td>
	</tr>
	<tr>
		<td>連絡電話：<input type="text" name="phone" placeholder="請輸入電話" required="required"></td>
		<td>電子信箱:<input type="email" name="email" placeholder="請輸入電子信箱" required="required" ></td>
	</tr>
	<tr>
		<td>備註</td>
		<td><textarea cols="50" rows="5" name="notes"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" value="我要訂票"></td>
		<td><input type="reset" value="全部重填"></td>
	</tr>
	</table>
</form>
</body>
</html>