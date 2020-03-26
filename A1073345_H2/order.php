<html>
	<head>
		<title>A1073345 訂票頁面</title>
		<style>
			body {background-color: #F4E1C6;}
			h1   {color: #40bf80;}
			h2   {color: #E68D61;}
			h3   {color: #E76781;}
			h4   {color: #1a8cff;}
			h5   {color: #b366ff;}
			h6   {color: #39ac73;}
			p    {color: black;}
		</style>
	</head>

	<body>

		<h1 align="center">早安午安晚安，歡迎來到高大環狀鐵路訂票系統</h1>
		<a><p Align=center><img src="https://gifimage.net/wp-content/uploads/2017/06/welcome-gif-12.gif" width="200" height="" border="1"></p>
		</a>
		<h2 align="center">高大環狀鐵路帶您遊高大</h2>
		<h3 align="center">在火車上，您可以看到:  </h3>
		<h4 align="center">成群結隊的可愛小狗狗、</h4>
		<h5 align="center">熊熊公仔、</h5>
		<h6 align="center">樹</h6>

	<form action="result.php" method="POST" border=4 align=center width=60% >
	
		姓名：<input type="text" name="name" placeholder="請輸入姓名" required>
		<p/>
		
		學號：<input type="text" name="id" placeholder="請輸入學號" required>
		<p/>

		性別：
		<input type="radio" name="sex" value="Female" required> 女性
		<input type="radio" name="sex" value="Male" required> 男性<br>
		<p/>	

		票數：<br/>
			&nbsp;&nbsp;
			全票<input type="number" name="adult" value="0" min="0">張<br/>
			敬老票<input type="number" name="elder" value="0" min="0">張<br/>
			愛心票<input type="number" name="disabled" value="0" min="0">張<br/>
		<p/>	

		起迄站：
	
        出發站
		<select name="start" required>
　		<option value="管理學院">管理學院</option>
　		<option value="法學院">法學院</option>
		<option value="工學院">工學院</option>
		<option value="學生宿舍">學生宿舍</option>
		<option value="理學院">理學院</option>
		<option value="圖書資訊大樓">圖書資訊大樓</option>
		<option value="行政大樓">行政大樓</option>
		</select>
		
        終點站
		<select name="end" required>
　		<option value="管理學院">管理學院</option>
　		<option value="法學院">法學院</option>
		<option value="工學院">工學院</option>
		<option value="學生宿舍">學生宿舍</option>
		<option value="理學院">理學院</option>
		<option value="圖書資訊大樓">圖書資訊大樓</option>
		<option value="行政大樓">行政大樓</option>
		</select>
		
		<p/>


		<p/>
		
        座位喜好
		<select required name="seat">
　		<option value="window">靠窗</option>
　		<option value="aisle">靠走道</option>
　		<option value="table">桌型</option>
		</select>
		<p/>

		聯絡電話：<input type="text" name="pn" placeholder="ex.0912345678" required>
		<p/>

		電子信箱：<input id="emailText" type="email" name="email"  value size="60" placeholder="ex.abc@gmail.com" required>
		<p/>	

		備註：</p>
				<textarea cols="50" rows="5" name="comment">
				　
				</textarea>

		</p>
		
			<input type="reset" value="重新輸入">
			<input type="submit" value="確定送出"><br/>
		</form>

		<h4 align="center">點擊下方圖片前往票價資訊頁面↓↓↓ </h4>
		<a href="price.php" target="new"><p Align=center><img src="https://upload.cc/i1/2020/03/11/uCbne0.png" width="200" height="" border="1"></p>
		</a>

	</body>

</html>