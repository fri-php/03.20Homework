<html>
<form action="result.php" method="POST">
<head>
	<title>A1083313 訂票頁面</title>
</head>
<body bgcolor="#FFF0F5">
<center>
<p>
<h1>歡迎來到高雄大學</h1>
<h2>歡迎搭乘校園環狀鐵路</h2>
<h3>歡迎線上訂票</h3>
<h4>歡迎查看票價資訊</h4>
<h5>歡迎提供意見</h5>
<h6>歡迎你下次再臨</h6>
<a href="price.html"><img src="uCbne0.png"></a>
</p>
<style>
table, th, td 
{
  border: 1px solid black;
  table-layout: fixed;
}
</style>
<h1>訂票表單</h1>
	<table bgcolor="#FFFACD" style="width:60%">
  	<tr>
    	<td>姓名:<input type="text" name="name" required></td>
    	<td>學號:<input type="text" name="id" required></td>
    	<td>性別:<select name="gender[]" required>
    		<option value="男">男</option>
        	<option value="女">女</option></select>
    	</td>
  	</tr>
  	<tr>
  		<td colspan="3">
  			票數:
  			<input type="checkbox" unchecked value="全票" name="tickets[]">全票<input type="number" name="num1" style="width:10% ;height:10% ;">張
			<input type="checkbox" unchecked value="愛心票" name="tickets[]">愛心票<input type="number" name="num2" style="width:10% ;height:10% ;">張
			<input type="checkbox" unchecked value="敬老票" name="tickets[]">敬老票<input type="number" name="num3" style="width:10% ;height:10% ;">張
		</td>
  	</tr>
  	<tr>
  		<td colspan="2">
  			起訖站:&emsp;起點<select name="station1" required>
    		<option value="管理學院">管理學院</option>
        	<option value="法學院">法學院</option>
			<option value="圖資">圖資</option>
			<option value="理學院">理學院</option>
			<option value="學二宿舍">學二宿舍</option>
			<option value="工學院">工學院</option>
			<option value="行政大樓">行政大樓</option></select>
			&emsp;~&emsp;終點<select name="station2" required>
    		<option value="管理學院">管理學院</option>
        	<option value="法學院">法學院</option>
			<option value="圖資">圖資</option>
			<option value="理學院">理學院</option>
			<option value="學二宿舍">學二宿舍</option>
			<option value="工學院">工學院</option>
			<option value="行政大樓">行政大樓</option></select>
  		</td>
  		<td>座位喜好<select name="seat" required>
    		<option value="靠窗">靠窗</option>
        	<option value="靠走道">靠走道</option></select>
        </td>
  	</tr>
  	<tr>
  		<td>
  			連絡電話:<input type="number" name="phone" required>
  		</td>
  		<td colspan="2">
  			電子郵件:<input type="email" name="mail" required>
  		</td>
  	</tr>
  	<tr>
 		<td colspan="3">
 			備註:<br/><textarea name="comment" cols="100" rows="10" style="width:100% ;"></textarea>
 		</td>
 	</tr>
</table>
<input type="reset" value="再輸一次">
<input type="submit" value="確定送出"><br/>
</center>
</body>
</html>
