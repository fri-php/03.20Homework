<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
<title>A1083311 訂票頁面</title>	
<style>
        html {
            height: 100%;
        }

        body {
            background-image: url(https://www.nuk.edu.tw/var/file/0/1000/randimg/mobileadv_972_4230459_86501.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
      
    </style>
</head>
<body>
	<form action="ticket.php" method="POST">
<div align="center">
	<b>
	<font color="red" face="標楷體" >
	<h1>歡迎</h1>
    <h2>歡迎</h2>
    <h3>歡迎</h3>
    <h4>歡迎</h4>
    <h5>歡迎</h5>
    <h6>歡迎</h6>
    <a href="price.php"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"><font size="+3"color="F8FF50" face="標楷體" ><br>票價資訊</a></font></div>
    <p>
    <font size="+3"color="44ECE8" face="標楷體" >	
  姓名: <input type="text" name="id"><br>
	學號: <input type="text" name="num"><br>
 	性別: <input type="radio" name="gender" value="male">男<input type="radio" name="gender" value="female">女<br>
 	票數: <br>
 	<input type="radio" value="full" >全票<input type="text" name="full"placeholder="數量" ><br>
 	<input type="radio" value="respect" >敬老票<input type="text" name="respect"placeholder="數量" ><br>
 	<input type="radio" value="love" >愛心票<input type="text" name="love"placeholder="數量" ><br>
 	起訖站: <br>起點:<select name="start">
  <option value="管理學院 ">管理學院 </option>
  <option value="法學院 ">法學院 </option>
  <option value="圖資 ">圖資 </option>
  <option value="理學院 ">理學院 </option>
  <option value="學二宿舍  ">學二宿舍</option>
  <option value="工學院 ">工學院</option>
  <option value="行政大樓 ">行政大樓</option>
</select><br>終點:<select name="end">
  <option value="管理學院 ">管理學院 </option>
  <option value="法學院 ">法學院 </option>
  <option value="圖資 ">圖資 </option>
  <option value="理學院 ">理學院 </option>
  <option value="學二宿舍  ">學二宿舍</option>
  <option value="工學院 ">工學院</option>
  <option value="行政大樓 ">行政大樓</option>
</select><br>
 	座位喜好:(多選) <br>
 	<input type="radio" name="window" value="window">靠窗
 	<input type="radio" name="mid" value="mid">中間
 	<input type="radio" name="side" value="sidewalk">走道<br>
 	連絡電話:<input type="text" name="phone"><br>
 	E-MAIL:<input type="E-MAIL" name="MAIL"><br>
 	<textarea cols="50" rows="5" name="note">備註:</textarea><br>
 	<input type="reset" value="重設"><input type="submit" value="提交"><br>
   </p></font>

</body>
</html>