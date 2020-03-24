<html>
<head>
	<title>A1083344 訂票頁面</title>

</head>
<body background="hi.jpg" style="background-position:right;background-repeat: no-repeat;" >
<center><h1 style="background-color:#FFCC22">歡迎來到高大訂車系統</h1></center>
<center><h2>在這你能訂到你高大小火車的座位</h2></center>
<center><h3>價格方面也不貴</h3></center>
<center><h4>只要你敢訂票</h4></center>
<center><h5>我們就敢載</h5></center>
<center><h6>只是能不能準時抵達就是另一個問題了</h6></center>
<center>票價資訊請點擊logo查看<br/><a href="price.php"><img src="uCbne0.png"></a></center>
<form action="th.php" method="POST">
	<center>你的大名<input type="text" name="name" placeholder="*此為必填" ><br/>
	你的信箱<input type="email" name="email" placeholder="*此為必填"><br/>
	你的電話號碼<input type="text" name="tel" placeholder="*此為必填"><br/>
	你的學號<input type="text" name="id" placeholder="*此為必填"><br/>
	<h4>偏好座位</h4>
	靠走道:<input type="radio"  value="M" name="seat">
	靠窗:<input type="radio" value="F" name="seat"><br/>
	<h4>要訂多少座位<br/></h4>
	全票<input type="checkbox"  value="n" name="ticket[]">
	<select name="numbern">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3" >3</option></select><br/>
	愛心票<input type="checkbox" value="l" name="ticket[]">
	<select name="numberl">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3" >3</option></select><br/>
	敬老票<input type="checkbox" value="o" name="ticket[]">
	<select name="numbero">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3" >3</option></select><br/>
	<h4>從哪一站開始搭<br/></h4>
	<select name="start">
	<option value="1">管理學院 </option>
	<option value="2">法學院 </option>
	<option value="3">圖資</option>
	<option value="4" >理學院</option>
	<option value="5">學二宿舍  </option>
	<option value="6">工學院 </option>
	<option value="7" >行政大樓 </option></select><br/>
	<h4>在哪一站下車<br/></h4>
	<select name="end">
	<option value="1">管理學院 </option>
	<option value="2">法學院 </option>
	<option value="3">圖資</option>
	<option value="4" >理學院</option>
	<option value="5">學二宿舍  </option>
	<option value="6">工學院 </option>
	<option value="7" >行政大樓 </option></select><br/>
	<h4>其他備註:<br/></h4>
	<TEXTAREA cols="80" rows="10">
	
	</TEXTAREA><br/>
	<input type="reset" value="全部重填">
	<input type="submit" value="我要訂票"><br/></center>


</form>
<center><h1 style="background-color:#666666">感謝您的使用</h1></center>
</body>