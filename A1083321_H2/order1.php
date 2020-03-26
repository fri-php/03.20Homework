<html>
<head>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">
<title>A1083321 訂票頁面</title>

</head>
<center>
<a href="price.html"><img src="uCbne0.png"></a></br>
<body bgcolor="#99e6ff">
<h1>NUK RAILWAY訂票系統 歡迎你！</h1>
<h2>NUK RAILWAY訂票系統 歡迎你！</h2></br>
<h3>NUK RAILWAY訂票系統 歡迎你！</h3></br>
<h4>NUK RAILWAY訂票系統 歡迎你！</h4></br>
<h5>NUK RAILWAY訂票系統 歡迎你！</h5></br>
<h6>NUK RAILWAY訂票系統 歡迎你！</h6></br>
<form action="order.php" method="POST">
姓名:<input type="text" name="name">
學號:<input type="text" name="id">
性別:
<input value="girl" type="checkbox" name="gender">女
<input value="boy" type="checkbox" name="gender">男</br>

票種:
<select name="ticket">
<option value="all">全票</option>
<option value="half">半票</option>
<option value="love">愛心票</option>
<option value="old">敬老票</option>
</select>


票數:
<input type="text" name="number">張</br>


起始站:
<select name="bestation">
<option value="management" >管理學院</option>
<option value="law">法學院</option>
<option value="library">圖資大樓</option>
<option value="ration">理學院</option>
<option value="do">學二宿舍</option>
<option value="ele">工學院</option>
<option value="work">行政大樓</option>
</select>
終點站:
<select name="endstation">
<option value="management" >管理學院</option>
<option value="law">法學院</option>
<option value="library">圖資大樓</option>
<option value="ration">理學院</option>
<option value="do">學二宿舍</option>
<option value="ele">工學院</option>
<option value="work">行政大樓</option>
</select></br>
</br>
座位喜好:
<input value="window" type="checkbox" name="seat">靠窗
<input value="asile" type="checkbox" name="seat">靠走道
<input value="other" type="checkbox" name="seat">其他<input type="text" name=""></br>
</br>
連絡電話:
<input type="text" name="phone"></br>
</br>
電子信箱:
<input type="text" name="email" Size="25" MaxLength="50"></br>
</br>
<textarea cols="50" rows="30">
備註:
</textarea></br>
<input type="submit"value="我要訂票">
<input type="reset" value="全部重填">
</center>
</form>
</body>
</html>