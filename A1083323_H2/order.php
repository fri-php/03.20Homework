<html>
<head>
<title>A1083323 訂票頁面</title>
</head>

<body bgcolor="#EDEDED">
<center>
<font size="5" color="#15130f" face="微軟正黑體">
<center>
<h1>歡迎 NUK RAILWAY</h1>
<h2>歡迎 NUK RAILWAY</h2>
<h3>歡迎 NUK RAILWAY</h3>
<h4>歡迎 NUK RAILWAY</h4>
<h5>歡迎 NUK RAILWAY</h5>
<h6>歡迎 NUK RAILWAY</h6>
</center>
<center><A href="price.html"><img src="uCbne0.png"></A></center><br/>
<form action="1212.php" method="POST">
姓名:<input type="text" name="name"><br/>
學號:<input type="text" name="id"><br/>
電子郵件:<input name="email" type="email" required /><br/>
連絡電話:<input name="mobile" type="text" required /><br/>
Female:<input type="radio" value="F" name="gender">
Male:<input type="radio"  value="M" name="gender"><br/>
票種:<select name="Yournum">
	<option selected="true">請選擇</option>
	<option>全票</option>
	<option>敬老票</option>
	<option>愛心票</option>
	<select/><br/>
 <div>
    <label for="range-number">票數：</label>
    <input type="range" min="0" max="20" id="range-number">
  </div>
起始站:<select name="Yourloc">
	<option selected="true">請選擇</option>
	<option>管理學院</option>
	<option>法學院</option>
	<option>圖資</option>
	<option>理學院</option>
	<option>學二宿舍</option>
	<option>工學院</option>
	<option>行政大樓</option>
	<select/><br/>
終點站:<select name="Yourdes">
	<option selected="true">請選擇</option>
	<option>管理學院</option>
	<option>法學院</option>
	<option>圖資</option>
	<option>理學院</option>
	<option>學二宿舍</option>
	<option>工學院</option>
	<option>行政大樓</option>
	<select/><br/>
座位喜好:<select name="Yourfav">
	<option selected="true">請選擇</option>
	<option>靠窗</option>
	<option>中間</option>
	<option>靠走道</option>
</select><br/><br/>
<div>
	<form action="1212.php" method="POST">
    <label for="message">備註：</label>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="有什麼...需要注意的嗎?"></textarea>
 </div>
<input type="reset" name="重整">
<input type="submit" name="送出"><br/>
</form>
</body>

</html>