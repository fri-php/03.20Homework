<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<center><title>A1083315 票價資訊</title></center>
<center>
<h2>高雄大學鐵路訂票系統</h2><br/>
</center>
</head>
<body>
<form action="hw2.php" method="POST">
<center>
姓名 : <input type="text" name="id" placeholder="*必填欄位"><br/><br/>
性別 : <input type="radio" name="gender" value="male" placeholder="*必填欄位"> 男
<input type="radio" name="gender" value="female" placeholder="*必填欄位"> 女<br/><br/>
學號 : <input type="text" name="sid" placeholder="*必填欄位"><br/><br/>
連絡電話 : <input type="text" name="cellphone" placeholder="*必填欄位"><br/><br/>
信箱 : <input type="email" placeholder="*必填欄位"><br/><br/>
票數 : <input type="number" name="number" placeholder="*必填欄位"><br/><br/>
<select name="YourTicket">
　<option value="全票">全票</option>
　<option value="敬老票">敬老票</option>
　<option value="愛心票">愛心票</option>
</select><br/><br/>
起訖站 : <select name="place">
　<option value="管理學院">管理學院</option>
　<option value="法學院">法學院</option>
　<option value="圖資">圖資</option>
<option value="理學院">理學院</option>
　<option value="學二宿舍">學二宿舍</option>
　<option value="工學院">工學院</option>
<option value="行政大樓">行政大樓</option>
</select><br/><br/>
座位喜好 : <input type="radio" name="seat" value="window"> 靠窗
<input type="radio" name="seat" value="sidewalk"> 靠走道<br/><br/>
備註:<br/><br/>
<textarea cols="50" rows="10"></textarea><br/><br/>
<B>票價表</B><br/><br/>
<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
<tr><td>站名</td><td>管理學院</td><td>法學院</td><td>圖資</td><td>理學院</td><td>學二宿舍</td><td>工學院</td><td>行政大樓</td></tr>
<tr><td>管理學院</td><td>-</td><td>100</td><td>200</td><td>300</td><td>400</td><td>500</td><td>600</td></tr>
<tr><td>法學院</td><td>100</td><td>-</td><td>100</td><td>200</td><td>300</td><td>400</td><td>500</td></tr>
<tr><td>圖資</td><td>100</td><td>200</td><td>-</td><td>100</td><td>200</td><td>300</td><td>400</td></tr>
<tr><td>理學院</td><td>100</td><td>200</td><td>300</td><td>-</td><td>100</td><td>200</td><td>300</td></tr>
<tr><td>學二宿舍</td><td>100</td><td>200</td><td>300</td><td>400</td><td>-</td><td>100</td><td>200</td></tr>
<tr><td>工學院</td><td>100</td><td>200</td><td>300</td><td>400</td><td>500</td><td>-</td><td>100</td></tr>
<tr><td>行政大樓</td><td>100</td><td>200</td><td>300</td><td>400</td><td>500</td><td>600</td><td>-</td></tr>
</table><br/><br/>
<B>票種一覽表</B><br/><br/>
<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
<tr><td colspan="2">票種</td><td>優惠</td><td>說明</td><td>備註</td></tr>
<tr><td colspan="2">全票(普通票)</td><td>無</td><td>18~65歲</td><td>無</td></tr>
<tr><td rowspan="2">優待票</td><td>敬老票</td><td>全線皆半價</td><td>65歲以上(包含65歲)</td><td>須持身分證或健保卡</td></tr>
<tr><td>愛心票</td><td>同敬老票</td><td>中低收入戶與身心障礙者</td><td>須有證明資料</td></tr>
</table><br/><br/>
<input type="button" onclick="history.back()" value="回上一頁" >
<input type="reset" value="全部重填" >
<input type="submit" value="我要訂票" ><br/><br/>
</center>
</form>
</body>
</html>
