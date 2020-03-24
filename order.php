<html>
<head>

<title> A1083301 訂票頁面 </title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">

</head>

<body bgcolor="#d6e0f5">

<center>

<table>
<a href="price.html" target="new">
<img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a>

<h1>Welcome to NUK RAILWAY!</h1>
<h2>Welcome to NUK RAILWAY!</h2>
<h3>Welcome to NUK RAILWAY!</h3>
<h4>Welcome to NUK RAILWAY!</h4>
<h5>Welcome to NUK RAILWAY!</h5>
<h6>Welcome to NUK RAILWAY!</h6></td></tr>
</table>

<form action="result.php" method="POST">

姓名:<input type="text" name="name" placeholder="姓名"  required="required"><br/>
學號:<input type="text" name="id" placeholder="學號" required="required"><br/>
性別:
<input type="radio"  value="M" name="gender" required>男
<input type="radio" value="F" name="gender">女<br/>

票數:
<select name="many" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
張
<input type="radio" value="adult" name="ticket" required>全票
<input type="radio"  value="senior" name="ticket">敬老票
<input type="radio"  value="disabled" name="ticket">愛心票<br/>

起訖站:
<select name="start" required>
<option value="A">管理學院</option>
<option value="B">法學院</option>
<option value="C" >圖資</option>
<option value="D" >理學院</option>
<option value="E" >學二宿舍</option>
<option value="F" >工學院</option>
<option value="G" >行政大樓</option>
</select>
~
<select name="end" required>
<option value="a">管理學院</option>
<option value="b">法學院</option>
<option value="c" >圖資</option>
<option value="d" >理學院</option>
<option value="e" >學二宿舍</option>
<option value="f" >工學院</option>
<option value="g" >行政大樓</option>
</select>
<br/>


座位喜好:
<input type="radio"  value="window" name="seat" required>靠窗
<input type="radio" value="aisle" name="seat">靠走道
<input type="radio" value="free" name="seat">不限<br/>

連絡電話:<input type="telephone" name="number" required="required"><br/>
信箱:<input type="email" name="mail" required="required" placeholder="email"><br/>

備註:<br/>
<TEXTAREA cols="70" rows="8" name="comment">
	
</TEXTAREA>>
<br/>

<input type="submit" value="我要訂票"><br/></input>
<input type="reset" value="全部重填"><br/></input>

</center>
</form>

</body>