<!DOCTYPE html>
<html>
<head>
	<title>A1073351 訂票頁面</title>
</head>
<body bgcolor="#ccccff">
<h1><p align="center">WELCOME!!!</p></h1>
<h2><p align="center">WELCOME!!!</p></h2>
<h3><p align="center">WELCOME!!!</p></h3>
<h4><p align="center">WELCOME!!!</p></h4>
<h5><p align="center">WELCOME!!!</p></h5>
<h6><p align="center">WELCOME!!!</p></h6>
<p align="center">
<a href="price.html"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></p></a>
</body>
<form action="result.php" method="POST">
<p align="center">訂票人資訊</p>
<p align="center">姓名:<input type="text" name="name"></br></p>
<p align="center">學號:<input type="text" name="id"></br></p>
<p align="center">請選擇性別:</p>
<p align="center">女:<input type="radio" value="F" name="gender"></p>
<p align="center">男:<input type="radio" value="M" name="gender"><br/></p>
<p align="center">請輸入票種:</p></br>
<p align="center">全票:<input type="radio" value="FULL" name="ticket"></p>
<p align="center">敬老票:<input type="radio" value="OLD" name="ticket"></p>
<p align="center">愛心票:<input type="radio" value="LOVE" name="ticket"></p>
<p align="center">起點站:
<p align="center">
<select name="Startstation">
　<option value="M01">管理學院</option>
　<option value="L01">法學院</option>
　<option value="Hsinchu">圖資大樓</option>
　<option value="C02">理學院</option>
<option value="Miaoli">學二宿舍</option>
<option value="C01">工學院</option>
<option value="administrative">行政大樓</option></p></select>
<p align="center">終點站:
	<p align="center">
<select name="Terminal">
　<option value="M01">管理學院</option>
　<option value="L01">法學院</option>
　<option value="Hsinchu">圖資大樓</option>
　<option value="C02">理學院</option>
<option value="
dormitory">學二宿舍</option>
<option value="C01">工學院</option>
<option value="administrative">行政大樓</option></p></select>
<p align="center">座位喜好:
	<p align="center">
<select name="seat">
　<option value="window">靠窗</option>
　<option value="aisle">靠走道</option></p></select>
<p align="center">請輸入聯絡資訊:<br/>
手機號碼:<input type="text" name="phonenumber"><br/>
    Email:<input type="text" name="Email"><br/>
    備註:<input type="text" name="note"><br/></P>
<p><p align="center">
我要訂票</br>
<input type="submit" value="我要訂票">
<input type="reset">
</form>
</p>
</html>