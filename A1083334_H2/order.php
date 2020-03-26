<html>
<head>
	<title>A1083334 訂票頁面</title>
</head>
<body bgcolor="#C19559">
<font color="#900C3F" face="微軟正黑體">

<div style="text-align:center;">
<h1>!歡迎到高雄大學鐵路訂票網!</h1>
<h2>!歡迎到高雄大學鐵路訂票網!</h2>
<h3>!歡迎到高雄大學鐵路訂票網!</h3>
<h4>!歡迎到高雄大學鐵路訂票網!</h4>
<h5>!歡迎到高雄大學鐵路訂票網!</h5>
<h6>!歡迎到高雄大學鐵路訂票網!</h6>
<a href = "price.php"><img src = "1.png" width = "20%"></a>
</br>
<font color="red">請點標誌進入票價資訊說明頁面</font>
</br>

訂票資訊
</br>
<a href = "loggin.php"><img src = "button.png" width = "5%"></a>
<form action="saving.php" method="POST">
請輸入你的名字:
<input type ="text" name="name"><br/>

請輸入學號:
<input type ="text" name="id"><br/>

請輸入你的電話:
<input type ="text" name="call"><br/>

請輸入你的信箱:
<input type ="email" name="email"><br/>

性別:
<input  type="radio" name="sex" value="male">男
<input  type="radio" name="sex" value="female">女<p>
票種:
<input  type="radio" name="ticket" value="普通票">普通票
<input  type="radio" name="ticket" value="學生票">學生票
<input  type="radio" name="ticket" value="敬老票">敬老票
<input  type="radio" name="ticket" value="愛心票">愛心票<p>


座位喜好:
<input type ="text" name="seat"><br/>



車次時間:
<input type ="date" name="date"><br/>
<input type ="time" name="time"><br/>


起站
<select name="station1">
 <option value="管理學院">管理學院</option>
 <option value="法學院">法學院</option>
  <option value="圖資">圖資</option>
  <option value="理學院">理學院</option>
  <option value="工學院">工學院</option>
  <option value="學二宿舍">學二宿舍</option>
  <option value="行政大樓">行政大樓</option>
</select></br>
終站
<select name="station2">
 <option value="管理學院">管理學院</option>
 <option value="法學院">法學院</option>
  <option value="圖資">圖資</option>
  <option value="理學院">理學院</option>
  <option value="工學院">工學院</option>
  <option value="學二宿舍">學二宿舍</option>
  <option value="行政大樓">行政大樓</option>
</select>

</br>
<input type ="submit" value= "送出">
<input type ="reset" value= "清空">


</form>









</div>
</body>
</html>