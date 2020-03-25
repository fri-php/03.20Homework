<html>
<haed>
	<title>A1073340 訂票網頁</title>
	<link rel="stylesheet" type="text/css" href="all.css">
</haed>

<body>
	<div id="a2">
		<div id="a1">
			<H1 align="center">歡迎蒞臨校鐵訂票網站</H2>
			<H2 align="center">歡迎蒞臨校鐵訂票網站</H2>
			<H3 align="center">歡迎蒞臨校鐵訂票網站</H2>
			<H4 align="center">歡迎蒞臨校鐵訂票網站</H2>
			<H5 align="center">歡迎蒞臨校鐵訂票網站</H2>
			<H6 align="center">歡迎蒞臨校鐵訂票網站</H2>
			<a href="price.html" target=""><img src="https://upload.cc/i1/2020/03/11/uCbne0.png" width="200px" height="100px" ></a><br><br>

			<form action="orderdata.php" method="POST">
			姓名：<input type="text" size="8" name="username">
			學號：<input type="text" size="17" placeholder="A1073340" name="number"><br><br>
			性別：男<input type="radio" name="sex" value="male">
				 女<input type="radio" name="sex" value="female"><br><br>
			票數(一人限購5張)：<br>
				
				全票<select name="adult">
　				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				</select>
				敬老票<select name="old">
　				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				</select>
				愛心票<select name="love">
　				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				</select>
				
			
				<!--<form style="margin:0px; display:inline">
				起站：<select name="">
　				<option value="1">管理學院</option>
				<option value="2">法學院</option>
				<option value="3">圖資</option>
				<option value="4">理學院</option>
				<option value="5">工學院</option>
				<option value="5">行政大樓</option>
				</select>
				</form>
			
				#<form style="margin:0px; display:inline">
				訖站：<select name="">
　				<option value="1">管理學院</option>
				<option value="2">法學院</option>
				<option value="3">圖資</option>
				<option value="4">理學院</option>
				<option value="5">工學院</option>
				<option value="5">行政大樓</option>
				</select>
				</form><br><br>-->
			座位喜好：靠窗<input type="radio" name="seat" value="靠窗">
				 	 走道<input type="radio" name="seat" value="走道"><br><br>
			聯絡電話：<input type="text" name="phone"><br><br>
			信箱(須符合格式)：<input type="email" size="35" placeholder="a1073340@mail.nuk.edu.tw" name="email"><br><br>
			備註：
			<textarea cols="40" rows="3" name="comment">
　			</textarea><br><br><br>
			
			除備註以外皆為<font color="#FF0000">必填欄位</font>
		
			<input type="submit" value="我要訂票">
			<input type="reset" value="全部重填">

			</form>		
		</div>
	</div>	

</body>

</html>