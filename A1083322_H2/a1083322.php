<!DOCTYPE html>
<html>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">
<form action="http://localhost/week3hw.php" method="POST">
<head>
<title>A1083322 訂票頁面</title>
</head>
<body>
<style>
        html {
            height: 100%;
        }

        body {
            background-image: url(111.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
<center>
	<h1>歡迎進來</h1>
	<h2>在你離開之前</h2>
	<h3>請駐足停留幾秒</h3>
	<h4>細細體驗這個美麗的網站</h4>
	<h5>這是高大新推出的校園鐵路訂票網站</h5>
	<h6>這行字太小你可以忽略</h6>
	<a href="http://localhost/price.php" target="_blank"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a>
</center>
<form>
<center>
	<font size="7"><b>訂票資訊網站</b></font>
<table bgcolor="#cb9cf2" width="1250" border="6" style="border-width:8px;border-style:double;border-color:;padding:4px;">
<tr>
	<td align='center' valign="middle">姓名</td>
	<td><input type="text" name="name" required="required"></td>
</tr>
<tr>
	<td align='center' valign="middle">學號</td>
	<td><input type="text" name="id" required="required"></td>
</tr>
<tr>
	<td align='center' valign="middle">性別</td>
	<td>女<input type="radio" value="女" name="gender">
	男<input type="radio" value="男" name="gender">
	嬲<input type="radio" value="基佬" name="gender">
	嫐<input type="radio" value="蕾絲" name="gender"></td>
</tr>
<tr>
	<td align='center' valign="middle">票種及張數</td>
	<td>全票<input type="checkbox" name="ticket1" value="全票">
		張數&nbsp&nbsp<input type="text" name="num1"><br>
		敬老票<input type="checkbox" name="ticket2" value="敬老票">
		張數&nbsp&nbsp<input type="text" name="num2"><br>
		愛心票<input type="checkbox" name="ticket3" value="愛心票">
		張數&nbsp&nbsp<input type="text" name="num3"><br>
	</td>
</tr>
<tr>
	<td align='center' valign="middle">起訖與終點站</td>
	<td>起訖&nbsp&nbsp<select name="start" required="required">
		<option value="管理學院">管理學院</option>
		<option value="法學院">法學院</option>
		<option value="圖資">圖資</option>
		<option value="理學院">理學院</option>
		<option value="學二宿舍">學二宿舍</option>
		<option value="工學院">工學院</option>
		<option value="行政大樓">行政大樓</option>
	</select>
	&nbsp&nbsp&nbsp&nbsp&nbsp
	終點&nbsp&nbsp<select name="end" required="required">
		<option value="管理學院">管理學院</option>
		<option value="法學院">法學院</option>
		<option value="圖資">圖資</option>
		<option value="理學院">理學院</option>
		<option value="學二宿舍">學二宿舍</option>
		<option value="工學院">工學院</option>
		<option value="行政大樓">行政大樓</option>
		</select>
	<a href="http://localhost/price.php" target="_blank">訂票詳細價格</a>
	</td>
	</section></td>
</tr>
<tr>
	<td align='center' valign="middle">座位喜好</td>
	<td><input type="radio" name="sit" value="靠窗">靠窗
	<input type="radio" name="sit" value="走道">走道</td>
</tr>
<tr>
	<td align='center' valign="middle">聯絡電話</td>
	<td><input type="text" name="phone"></td>
</tr>
<tr>
	<td align='center' valign="middle">電子信箱</td>
	<td><input type="mail" name="mail"></td>
</tr>
<tr>
	<td align='center' valign="middle">備註</td>
	<td colspan="2"><textarea cols="150" rows="5" name="comment"></textarea></td>
</tr>
<tr>
	<td colspan="2" align='center' valign="middle"><input type="submit" value="我要訂票">
	<input type="reset" value="全部重填"></td>
</tr>
</table>
</form>
</body>
</form>
</html>