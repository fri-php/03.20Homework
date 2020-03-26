<html>
<head>
	<title>A1073301訂票頁面</title>

	<link rel="stylesheet" type="text/css" href="all.css">
</head>
<body bgcolor="#6CA6CD">

 <div style="text-align:center;"><h1>歡迎來到高大校鐵訂票網站~</h1></div>
 <a href="price.html"><img src="uCbne.png" style="display:block; margin:auto;"/></a></br>


</body>
<form action="output.php" method="POST">
 	<p align="center">您的姓名:<input type="text" name="name" placeholder="王小明"></br></p>
 	<p align="center">您的學號:<input type="text" name="id" placeholder="A1073301"><br/></p>
 	<p align="center">您是:女森<input type="radio" value="女森" name="gender">
         男森<input type="radio" value="男森" name="gender"><br/></p>
    <p align="center">票種:全票<input type="radio" value="全票" name="ticket">
         敬老票<input type="radio" value="敬老票" name="ticket">
         愛心票<input type="radio" value="愛心票" name="ticket"><br/></p>
    <p align="center">起程站
    <p align="center">
    <select name="startstation">
    	<option value="Mang">管理學院</option>
    <option value="law">法學院</option>
    <option value="lib">圖資</option>
    <option value="math">理學院</option>
    <option value="dorm">學二宿舍</option>
    <option value="eng">工學院</option>
    <option value="adm">行政大樓</option>
    </select></p>
    <p align="center">到達站
    <p align="center">
    <select name="finalstation">
    	<option value="Mang">管理學院</option>
    <option value="law">法學院</option>
    <option value="lib">圖資</option>
    <option value="math">理學院</option>
    <option value="dorm">學二宿舍</option>
    <option value="eng">工學院</option>
    <option value="adm">行政大樓</option>
    </select></br></p>
    <p align="center">座位喜好
    <p align="center">
    <select name="seat">
    	<option value="window">靠窗</option>
    <option value="path">靠走道</option>
    <option value="both">都可以</option>
    </select></br></p>
    <p align="center">您的聯絡電話:<input type="text" name="phone" placeholder="0912345678"></br></p>
    <p align="center">您的電子信箱:<input type="text" name="email" placeholder="a1073301@mail.nuk.edu.tw"></br></p>
    <p align="center">備註:</br></p>
    <p align="center"><textarea cols="30" rows="2" name="note">
    </textarea><br/></p>

    <p align="center"><input type="reset">
    <input type="submit" value="我要訂票"><br/></p>

</form>

</html>