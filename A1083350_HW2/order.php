<html>
	<head>
		<title>A1083350 訂票頁面</title>
	</head>
	<body bgcolor="DFFBBB">
		<h1><p align="center">歡迎來到高大校鐵訂票網站</p></h1>
		<h2><p align="center">歡迎來到高大校鐵訂票網站</p></h2>
		<h3><p align="center">歡迎來到高大校鐵訂票網站</p></h3>
		<h4><p align="center">歡迎來到高大校鐵訂票網站</p></h4>
		<h5><p align="center">歡迎來到高大校鐵訂票網站</p></h5>
		<h6><p align="center">歡迎來到高大校鐵訂票網站</p></h6>
		<center><a href="price.php"><img src="uCbne0.png" sizes="50%"></a></center>
		<p>
			<h1><p align="center">線上訂票表單</p></h1>
		<form action="ticket.php" method="POST">
			<center><table border="1" bgcolor="FFE1BC">
			<tr><td><center><br>
				姓名：<input type="text" name="fname">
				<p style="margin:20px">學號：<input type="text" name="id"></p>
				<p style="margin:20px">性別：<input type="radio" value="M" name="Sex">男<input type="radio" value="F" name="Sex">女</p>
				<p style="margin:20px">票數：<input type="text" placeholder="例：x張全票、x張敬老票" name="ticket"></p>
				<p style="margin:20px">起訖站：<select name="start">
					<option>管理學院</option>
					<option>法學院</option>
					<option>圖資</option>
					<option>理學院</option>
					<option>學二宿舍</option>
					<option>工學院</option>
					<option>行政大樓</option>
				</select>
				終點站：<select name="end">
					<option>行政大樓</option>
					<option>工學院</option>
					<option>學二宿舍</option>
					<option>理學院</option>
					<option>圖資</option>
					<option>工學院</option>
					<option>管理學院</option>
				</select></p>
				<p style="margin:20px">座位喜好：<input type="radio" value="left" name="sit">靠左<input type="radio" value="right" name="sit">靠右</p>
				<p style="margin:20px">聯絡號碼：<input type="tel" name="tel"></p>
				<p style="margin:20px">電子郵箱：<input type="email" name="email"></p>
				<p><input type="submit" value="我要訂票">
				<input type="reset" value="全部重填"></p>
				<br>
			</td></tr></center>
			</table></center>
		</form>
	</body>
</html>