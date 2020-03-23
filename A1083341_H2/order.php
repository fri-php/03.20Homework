<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>A1083341 訂票頁面</title>

	<style>
		p.a{font-size: 100%;
			font-family: 新細明體-ExtB;
			text-align: center;
			background-color: lightblue;
		    padding: 5px;}

	</style>


</head>
<body  background="1234.jpg">
	<h1 style="text-align: center;">歡迎光臨</h1>
	<h2 style="text-align: center;">歡迎光臨</h2>
	<h3 style="text-align: center;">歡迎光臨</h3>
	<h4 style="text-align: center;">歡迎光臨</h4>
	<h5 style="text-align: center;">歡迎光臨</h5>
	<h6 style="text-align: center;">歡迎光臨</h6>

	

	<a href="price.php" >
    	<img src="123.png" style="display:block; margin:auto;" />
    </a>

    <form action="result.php" method="POST">
    	<p class="a">
    	    輸入您的姓名:
            <input type="text" name="name" required>
            <br>
    	    輸入您的學號:
            <input type="text" name="schoolid" required>
            <br>
    	    輸入您的性別:
            男<input type="radio" name="gender" value="M" required>
            女<input type="radio" name="gender" value="F" ><br>
            輸入您的票數:

    		<select name="ticketnumber" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br/>
            輸入你的疾病:
            <select name="sick[]" multiple required>
                <option value="高血壓">高血壓</option>
                <option value="新冠肺炎">新冠肺炎</option>
                <option value="糖尿病">糖尿病</option>
                <option value="貧血">貧血</option>
            </select>
            <br/>
            輸入你的過敏原:
            蝦子<input type="checkbox" value="蝦子" name="sickto[]">
            蛋<input type="checkbox" value="蛋" name="sickto[]">
            大豆<input type="checkbox" value="大豆" name="sickto[]">
            牛奶<input type="checkbox" value="牛奶" name="sickto[]">
            <br/>
            輸入你最近去過之國家:
            中國武漢
            <input type="checkbox" value="中國武漢" name="coun[]">
            美國
            <input type="checkbox" value="美國" name="coun[]">
            義大利
            <input type="checkbox" value="義大利" name="coun[]">
            西班牙
            <input type="checkbox" value="西班牙" name="coun[]">
            <br/>
            
    		輸入您的起站:
            <input type="text" name="start" required><br>
    		輸入您的訖站:
            <input type="text" name="terminal" required><br>

    		輸入您的座號喜好:
            靠窗<input type="radio" name="seat" value="w" required>
            靠走廊<input type="radio" name="seat" value="s"><br>

    	    輸入您的電話:
            <input type="text" name="phones" required><br>
    	    輸入您的信箱:
            <input type="email" name="email" required><br>
    		輸入您的備註:<br>
    		<textarea cols="40" rows="3" name="comment">

    			
    		</textarea><br>
   
    		<input type="reset" name="全部重填">
    		<input type="submit" name="我要訂票">
    	</p>
    </form>

</body>
</html>