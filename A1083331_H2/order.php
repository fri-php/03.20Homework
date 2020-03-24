<html>
<head>
	<title>A1083331訂票頁面</title>
<SCRIPT type="text/javascript">
  function check()
 {
 if(reg.NA.value == "") 
    {
          alert("未輸入姓名");
    }
 else if(reg.IDC.value == "" ){
 alert("未輸入學號");
                }
                else if(reg.mail.value == "" ){
 alert("未輸入信箱");
                }
                else if(reg.CELL.value == "" ){
 alert("未輸入電話");
                }
                else if(reg.A3.value == "" ){
 alert("未輸入票數");
                }
                else if(reg.A1.value == "" ){
 alert("未輸入票數");
                }
                else if(reg.A2.value == "" ){
 alert("未輸入票數");
                }
      else if(!reg.sex[0].checked && !reg.sex[1].checked)
  {
             alert("未選擇性別");
  }
                
               else if(!reg.prefer[0].checked && !reg.prefer[1].checked) 
               	{
             alert("未選擇喜好");
  }
  else reg.submit();
         }
		</SCRIPT>
</head>
<body style=" background-repeat:no-repeat ;

background-size:100% 100%; 

background-attachment: fixed;" background="阿.png">
<form  name="reg" method="POST" action="hw.php">
<h1 align="center" >歡迎來到本訂票網站<a href="http://localhost/price.php" target="new"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png" width="10%" height=""></a></h1>
<h2 align="center">歡迎來到本訂票網站</h2>
<h3 align="center" >歡迎來到本訂票網站</h3>
<h4 align="center" >歡迎來到本訂票網站</h4>
<h5 align="center" >歡迎來到本訂票網站</h5>
<h6 align="center" >歡迎來到本訂票網站</h6>
請入輸姓名:<input type="text" placeholder="請輸入姓名" name="NA"></br>
請輸入學號:<input type="text" placeholder="學號" name="IDC" ></br>
性別:男<input type="radio" name="sex" value="男"/>女<input type="radio" value="女" name="sex"/></br>
請選擇起始站:<select name="s1" >
<option value="理學院">管理學院</option>
<option value="法學院">法學院</option>
<option value="圖資">圖資</option>
<option value="理學院">理學院</option>
<option value="學二宿舍">學二宿舍</option>
<option value="工學院">工學院</option>
<option value="行政大樓">行政大樓</option>
</select>
請選擇終點站:<select name="s2">
<option value="管理學院">管理學院</option>
<option value="法學院">法學院</option>
<option value="圖資">圖資</option>
<option value="理學院">理學院</option>
<option value="學二宿舍">學二宿舍</option>
<option value="工學院">工學院</option>
<option value="行政大樓">行政大樓</option>
</select>
請填入購買票數:</br>全票:<input type="text" placeholder="0" name="A3" ></br>
敬老票<input type="text" placeholder="0" name="A1" ></br>
愛心票<input type="text" placeholder="0" name="A2" ></br>
請選擇座位喜好:靠窗<input type="radio" name="prefer" value="靠窗" >
靠走道<input type="radio" name="prefer" value="靠走道"></br>
請輸入連絡電話:<input type="text" name="CELL" ></br>
請輸入信箱:<input type="email" name="mail" placeholder="xxxxxx@.xxxx" ></br>
特殊疾病:肺炎<input type="checkbox" name="ILL[]" value="肺炎">
流感<input type="checkbox" name="ILL[]" value="流感">
心臟病<input type="checkbox" name="ILL[]" value="心臟病">
糖尿病<input type="checkbox" name="ILL[]" value="糖尿病"></BR>
食物喜好:台式<input type="checkbox" name="FOD[]" value="台式">
西式<input type="checkbox" name="FOD[]" value="西式">
日式<input type="checkbox" name="FOD[]" value="日式">
中式<input type="checkbox" name="FOD[]" value="中式"></BR>
備註:<textarea cols="50" rows="5" placeholder="請輸入..." name="BC">
</textarea> </br>
<input type="reset" value="全部重填" >
<input type="button" value="我要訂票" onClick="check()"><br/>
帳號:<input type="text" name="idd"><br/>
密碼:<input type="password" name="uidd"><br/>
<input type="submit">
</br>
</br>
</br>
</br>
</br>
</form>
</body>
</html>