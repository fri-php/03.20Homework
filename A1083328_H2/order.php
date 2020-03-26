<head>
<body bgcolor= blue>
<title>A1083328訂票頁面</title>
<center>
<form action="result.php" method="POST" >
<font size = 30 color = powderblue><B><U>Welcome to National University of Kaoshiong Train Website</U></B></font><br/>
<font size = 12 color = powderblue><B>Klik the picture to cek the price</B></font>
<a href="price.html"><img src="Images/Railway.png" alt="Smiley face" style="float:center;width:400px;height:400px;"><br/></a>
<font size = 10 color = powderblue><B>Klik the picture to cek the price</B></font>
<a href="price.html"><img src="Images/Railway.png" alt="Smiley face" style="float:center;width:250px;height:250px;"><br/></a>
<font size = 8 color = powderblue><B>Klik the picture to cek the price</B></font>
<a href="price.html"><img src="Images/Railway.png" alt="Smiley face" style="float:center;width:200px;height:200px;"><br/></a>
<font size = 6 color = powderblue><B>Klik the picture to cek the price</B></font>
<a href="price.html"><img src="Images/Railway.png" alt="Smiley face" style="float:center;width:150px;height:150px;"><br/></a>
<font size = 4 color = powderblue><B>Klik the picture to cek the price</B></font>
<a href="price.html"><img src="Images/Railway.png" alt="Smiley face" style="float:center;width:100px;height:100px;"><br/></a>
<font size = 2 color = powderblue><B>Klik the picture to cek the price</B></font>
<a href="price.html"><img src="Images/Railway.png" alt="Smiley face" style="float:center;width:50px;height:50px;"><br/></a>
<font color = powderblue size = 5>請輸入您的名字/Name：<input type="text" name="id" placeholder="Mandarin only"></font><br/>
<font color = powderblue size = 5>請輸入您的學號/School ID：<input type="text" name="pwd"><font><br/>
<font color = powderblue size = 5>手機號/Handphone Number：<input type="text" name="num"><font><br/>
<font color = powderblue size = 5>Email：<input type="email" name="email"><font><br/>
起訖站/From Station
<select name ="station">
<option value="資管學院/Managemnet Building">Management Building</option>
<option value="法學院/Law Building">Law Building</option>
<option value="圖資/Library">Library</option>
<option value="理學院">Science Building</option>
<option value="學二宿舍/Second Domitary">Second Domitary</option>
<option value="工學院">Computer Building</option>
<option value="行政大樓">FirstBuilding</option>
</select><br/>
起訖站/To Station
<select name ="nextstation">
<option value="資管學院/Managemnet Building">Management Building</option>
<option value="法學院/Law Building">Law Building</option>
<option value="圖資/Library">Library</option>
<option value="理學院">Science Building</option>
<option value="學二宿舍/Second Domitary">Second Domitary</option>
<option value="工學院">Computer Building</option>
<option value="行政大樓">FirstBuilding</option>
</select><br/>
Ticket 
<select name ="Ticket">
<option value="普通票/全票">Alone Ticket</option>
<option value="敬老票">Old people Ticket</option>
<option value="愛心票">For Couple</option>
</select><br/>
Prefer sit:</br>
VIP<input type="radio" checked value = "V" name="vip">
NON VIP<input type="radio" checked value = "NV" name="vip"><br/>
Gender/Sex:</br>
Male/男生<input type="radio" checked value = "M" name="gender">
Women/女生<input type="radio" checked value = "F" name="gender"><br/>
<textarea cols="80" row="40" name ="comment">
	
</textarea>
<br/>
<input type="reset">
<button onclick="myFunction()">我要訂票</button>

<script>
function myFunction() {
  alert("訂票成空");
}
</script>
</form>
</center>
</body>
</head>