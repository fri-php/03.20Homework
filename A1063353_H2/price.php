<HTML>
<head><title>A1063353 票價頁面</title></head>
<BODY bgcolor=" #DDDDDD">
<form action="result.php" method="post">
<font size="45">購買表單</font> <br>
姓名: <input name="name" size="10"  required><br> 
學號: <input name="id" size="10" required><br> 
性別: <input type="radio" name="sex" value="男性" checked>男性 
      <input type="radio" name="sex" value="女性" >女性<br> 
票種:<input type="radio" name="p" value="全票" checked>全票
     <input type="radio" name="p" value="敬老票" checked>敬老票
     <input type="radio" name="p" value="愛心票" checked>愛心票<br>
起始站:<select name="s1"  required>
　<option value="管理學院">管理學院</option>             
　<option value="法學院">法學院</option>
　<option value="圖資">圖資</option>
　<option value="理學院">理學院</option>
<option value="學二宿舍">學二宿舍</option>
<option value="工學院">工學院</option>
<option value="行政大樓">行政大樓</option>
</select> <BR>
終點站:<select name="s2" required>
<option value="管理學院">管理學院</option>             
　<option value="法學院">法學院</option>
　<option value="圖資">圖資</option>
　<option value="理學院">理學院</option>
<option value="學二宿舍">學二宿舍</option>
<option value="工學院">工學院</option>
<option value="行政大樓">行政大樓</option>
</select> <BR>
座位喜好:<input name="love" size="10"  required><br> 
連絡電話:<input name="call" size="10" required><br> 
信箱:<input name="call" size="10"  required><br> 
<input type="submit" name="send"value="我要訂票">
<input type="reset" name="ok" value="全部重填">
<br> 

<input type ="button" onclick="javascript:location.href='order.php'" value="回到首頁"></input>
</from><br> <br> 
	
 <font size="45">票價表</font> <br>
	<table table width="50%" border="1"> 
	<TR>
        <td bgcolor="#FFBB00">站名 </td>
		<td bgcolor="#FFBB00">管理學院</td>
	    <td bgcolor="#FFBB00">法學院</td>
	    <td bgcolor="#FFBB00">圖資</td>
	    <td bgcolor="#FFBB00">理學院</td>
        <td bgcolor="#FFBB00">學二宿舍</td>
        <td bgcolor="#FFBB00">工學院</td>
        <td bgcolor="#FFBB00">行政大樓</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">管理學院</td>
		<td>   </td>
	    <td bgcolor=#99FF99>200</td>
	    <td bgcolor=#99FF99>300</td>
	    <td bgcolor=#99FF99>400</td>
        <td bgcolor=#99FF99>500</td>
        <td bgcolor=#99FF99>600</td>
        <td bgcolor=#99FF99>700</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">法學院 </td>
		<td bgcolor="#33CCFF">700</td>
	    <td>   </td>
	    <td bgcolor=#99FF99>200</td>
	    <td bgcolor=#99FF99>300</td>
        <td bgcolor=#99FF99>400</td>
        <td bgcolor=#99FF99>500</td>
        <td bgcolor=#99FF99>600</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">圖資  </td>
		<td bgcolor="#33CCFF">300</td>
	    <td bgcolor="#33CCFF">400</td>
	    <td>   </td>
	    <td bgcolor=#99FF99>600</td>
        <td bgcolor=#99FF99>500</td>
        <td bgcolor=#99FF99>600</td>
        <td bgcolor=#99FF99>400</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">理學院 </td>
		<td bgcolor="#33CCFF">100</td>
	    <td bgcolor="#33CCFF">200</td>
	    <td bgcolor="#33CCFF">300</td>
	    <td>   </td>
        <td bgcolor=#99FF99>500</td>
        <td bgcolor=#99FF99>600</td>
        <td bgcolor=#99FF99>400</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">學二宿舍</td>
		<td bgcolor="#33CCFF">100</td>
	    <td bgcolor="#33CCFF">200</td>
	    <td bgcolor="#33CCFF">300</td>
	    <td bgcolor="#33CCFF">400</td>
        <td>   </td>
        <td  bgcolor=#99FF99>600</td>
        <td bgcolor=#99FF99>400</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">  工學院 </td>
		<td bgcolor="#33CCFF">100</td>
	    <td bgcolor="#33CCFF">200</td>
	    <td bgcolor="#33CCFF">300</td>
	    <td bgcolor="#33CCFF">400</td>
        <td bgcolor="#33CCFF">500</td>
        <td>   </td>
        <td bgcolor=#99FF99>400</td>
     </TR>
     <TR>
        <td bgcolor="#FFBB00">行政大樓</td>
		<td bgcolor="#33CCFF">100</td>
	    <td bgcolor="#33CCFF">200</td>
	    <td bgcolor="#33CCFF">300</td>
	    <td bgcolor="#33CCFF">400</td>
        <td bgcolor="#33CCFF">500</td>
        <td bgcolor="#33CCFF">600</td>
        <td>   </td>
     </TR> <br>

    
     <table border="2"> 
    <font size="45"> 票種表 </font> <br> 
        <table class="tg" border="2" table width="50%"  table high="50%"
       >
  <tr>
    <th class="tg-0pky" colspan="2" bgcolor="#FFFF33"  >票種</th>
    <th class="tg-0pky" bgcolor="#FFFF33">優惠</th>
    <th class="tg-0pky" bgcolor="#FFFF33">說明</th>
    <th class="tg-0pky" bgcolor="#FFFF33">備註</th>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="2" bgcolor="#66FF66 ">普通票</td>
    <td class="tg-0pky" bgcolor="#66FF66 ">無</td>
    <td class="tg-0pky" bgcolor="#66FF66 ">成人票價按乘車區間營業里程乘票價率計算之。</td>
    <td class="tg-0pky" bgcolor="#66FF66 ">無</td>
  </tr>
  <tr>
    <td class="tg-0pky" rowspan="2" bgcolor="#CCEEFF">優待票</td>
    <td class="tg-0pky" bgcolor=" #00FFFF ">愛心票</td>
    <td class="tg-0pky"bgcolor=" #00FFFF ">八十一公里(含)以對號列車無座票八折計價優待</td>
    <td class="tg-0pky"bgcolor=" #00FFFF ">減價優待票以一項優待為限，不得重複優待。</td>
    <td class="tg-0pky"bgcolor=" #00FFFF ">身心障礙者乘車，其陪同乘車之監護人或必要陪伴者一人申購半價優待票時，應填具「優待票乘車票請購證明單」</td>
  </tr>
  <tr>
    <td class="tg-0pky "bgcolor=" #D1BBFF ">老人票</td>
    <td class="tg-0pky "bgcolor=" #D1BBFF ">老票價(年滿65歲之本國國民或於永久居留證並註記搭乘國內大眾交通工具優待之永久居留權人士)。</td>
    <td class="tg-0pky "bgcolor=" #D1BBFF ">減價優待票以一項優待為限，不得重複優待</td>
    <td class="tg-0pky "bgcolor=" #D1BBFF ">無</td>
  </tr>
</table>

</BODY>
</HTML>