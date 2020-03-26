<html>
<head>
	<title>A1083343 訂票網站</title>
</head>
<body bgcolor="#F9F5CA">

<h1 align="center">Welcome</h1>
<h2 align="center">Welcome</h2>
<h3 align="center">Welcome</h3>
<h4 align="center">Welcome</h4>
<h5 align="center">Welcome</h5>
<h6 align="center">Welcome</h6>

<a href="http://localhost/price.php"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png" style="display: block;margin:auto" height="200" width="200" ></a><br/>
<br/>
<br/>
<br/>
<form action="ordercheck.php" method="POST">
請輸入您的姓名:<input type="text" name="name" required><br/>
請輸入您的學號:<input type="text" name="id" required><br/>

請選取性別:
男<input type="radio" value="M" name="gender">
女<input type="radio" value="F" name="gender" required><br/>

請選取票種:
全票<input type="number"  name="points1" min="0" max="10"  required>
&nbsp敬老票<input type="number" name="points2" min="0" max="10"  required>
&nbsp愛心票<input type="number" name="points3" min="0" max="10"  required><br/>


請選取起始站:
&nbsp管理學院<input type="radio" value="管理學院" name="Start">
&nbsp法學院<input type="radio" value="法學院" name="Start">
&nbsp圖資<input type="radio" value="圖資" name="Start">
&nbsp理學院<input type="radio" value="理學院" name="Start">
&nbsp學二宿舍<input type="radio" value="學二宿舍" name="Start">
&nbsp工學院<input type="radio" value="工學院" name="Start">
&nbsp行政大樓<input type="radio" value="行政大樓" name="Start" required><br/>

請選取終點站:
&nbsp管理學院<input type="radio" value="" name="End">
&nbsp法學院<input type="radio" value="法學院" name="End">
&nbsp圖資<input type="radio" value="圖資" name="End">
&nbsp理學院<input type="radio" value="理學院" name="End">
&nbsp學二宿舍<input type="radio" value="學二宿舍" name="End">
&nbsp工學院<input type="radio" value="工學院" name="End">
&nbsp行政大樓<input type="radio" value="行政大樓" name="End" required><br/>

請選擇座位喜好:
&nbsp靠窗<input type="radio" value="窗"  name="Like">
&nbsp走道<input type="radio" value="走道"  name="Like" required><br/>

請輸入您的連絡電話:<input type="text"  name="ph" required><br/>
請輸入您的信箱:<input type="email" name="email" required><br/>

備註<br/>
<textarea cols="50" name="message" rows="10"></textarea>
<br/>

<input type="reset" value="全部重填">
<input type="submit" value="我要訂位"><br/>


</body>
</html>