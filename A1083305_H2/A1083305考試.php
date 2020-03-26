<html>
<font face="微軟正黑體, Arial">
<form action="http://localhost/A1083305-2考試.php" method="POST">
<head>
<style type="text/css">

.fieldset-auto-width {

display: inline-block;

}

</style>
<style>
        html {
            height: 140%;
        }

        body {
            background-image: url(uCbne00.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<title>A1083305 訂票頁面</title>
<center>
<h1>歡迎</h1><br/>
<h2>歡迎</h2><br/>
<h3>歡迎</h3><br/>
<h4>歡迎</h4><br/>
<h5>歡迎</h5><br/>
<h6>歡迎</h6><br/>
<a href="price.html"><img src="uCbne0.png" border="0"></a>

<body>

<h1><center><font color="black">票價頁面資訊</font></center></h1>
<form action="result.php" method="POST">

<fieldset style = "width: 1010px; margin:  0px auto;border-style:solid;border-color:black;">
<legend><h2>訂票必填資料</h2></legend>
<font size="4">
<b>
&emsp;&emsp;&emsp;&emsp;姓名：<input type="text" name="id" required>
&emsp;學號：<input type="text" name="a10833" required>
&emsp;性別：<select name="gender" required>
	<option value="female">女性</option>
	<option value="male">男性</option>
	<option value="other">其他</option>
	</select>
&emsp;聯絡電話：<input type="text" name="telephone" required>
<p>

&emsp;&emsp;&emsp;&emsp;信箱：<input type="mail" name="mail" required style="width:300px; height:23px;" />
&emsp;票數：
	   	<input type="checkbox" name="ea" value="vegetable" required>全票&ensp;<input name="num1" type="text" style="width:40px; height:20px;" />&ensp;張
		&emsp;<input type="checkbox" name="e" value="vegetable">敬老票&ensp;<input name="num2" type="text" style="width:40px; height:20px;" />&ensp;張
		&emsp;<input type="checkbox" name="eat" value="vegetable">愛心票&ensp;<input name="num3" type="text" style="width:40px; height:20px;" />&ensp;張
</p>
<p>
&emsp;&emsp;&emsp;&emsp;起點：<select name="station1">
	　<option value="管理學院">管理學院</option>
	　<option value="法學院">法學院</option>
	　<option value="圖資大樓">圖資大樓</option>
	　<option value="理學院">理學院</option>
	　<option value="學二宿舍">學二宿舍</option>
	　<option value="工學院">工學院</option>
	　<option value="行政大樓">行政大樓</option>
	　</select>
－終點：<select name="station2">
	　<option value="管理學院">管理學院</option>
	　<option value="法學院">法學院</option>
	　<option value="圖資大樓">圖資大樓</option>
	　<option value="理學院">理學院</option>
	　<option value="學二宿舍">學二宿舍</option>
	　<option value="工學院">工學院</option>
	　<option value="行政大樓">行政大樓</option>
	　</select>

&emsp;座位喜好：<input type="text" name="sit" placeholder="ex:靠窗、靠走道" required>&emsp;備註：<input type="text" name="note">


</p>
<center>
<input type="reset" value="全部重填">
<input type="submit" value="我要訂票"><br/>
</center>
</fieldset>
</center>
</font>