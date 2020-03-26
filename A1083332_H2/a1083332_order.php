<html>
<head>
  <title>A1083332 訂票頁面</title>
</head>
<body>

<h1><font color=red><CENTER>~歡迎來到高雄大學校園鐵路訂票系統~</CENTER></font></h1>
<h2><font color=#FFBB00><CENTER>~歡迎來到高雄大學校園鐵路訂票系統~</CENTER></font></h2>
<h3><font color=green><CENTER>~歡迎來到高雄大學校園鐵路訂票系統~</CENTER></font></h3>
<h4><font color=blue><CENTER>~歡迎來到高雄大學校園鐵路訂票系統~</CENTER></font></h4>
<h5><font color=purple><CENTER>~歡迎來到高雄大學校園鐵路訂票系統~</CENTER></font></h5>
<h6><font color=pink><CENTER>~歡迎來到高雄大學校園鐵路訂票系統~</CENTER></font>~</h6>

<a href="http://localhost/a1083332_price.php"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png" title="票價資訊"></a>
<br><br><br>

<form name="ticket" method="POST" action="a1083332_order_submit.php" accept-charset="utf-8">
      
      姓名<br>
      <input type="text" name="name" required> 
      <br><br>
      
      學號<br>
      <input type="text" name="student_ID" required> 
      <br><br>

      性別<br>
      男<input type="radio" value="男" name="gender" required>
      女<input type="radio" value="女" name="gender" required> <br>  <br>   

      票數<br>
  普通票
  <input type="text" placeholder="0" name="normal" ><br><br>
  敬老票
  <input type="text" placeholder="0" name="old" ><br><br>
  愛心票
  <input type="text" placeholder="0" name="heart" ><br><br>

      起始站<br>
     <select name="start" required>
      <option value="管理學院">管理學院</option>
      <option value="法學院">法學院</option>
      <option value="圖資">圖資</option>
      <option value="理學院">理學院</option>
      <option value="學二宿舍">學二宿舍</option>
      <option value="工學院">工學院</option>
      <option value="行政大樓">行政大樓</option>
     </select>
      <br><br>

    到達站<br>
     <select name="arrive" required>
      <option value="管理學院">管理學院</option>
      <option value="法學院">法學院</option>
      <option value="圖資">圖資</option>
      <option value="理學院">理學院</option>
      <option value="學二宿舍">學二宿舍</option>
      <option value="工學院">工學院</option>
      <option value="行政大樓">行政大樓</option>
     </select>
      <br><br>

      座位喜好<br>
     <select name="seat" required>
      <option value="靠窗">靠窗</option>
      <option value="靠走道">靠走道</option>
     </select>
      <br><br>

      手機號碼<br>
    <input type="tel" name="phone" pattern="[0-9]{10}" required>

      <br><br>      

      信箱<br>
      <input type="email" id="email" name="email" required>
      <br><br>

      備註<br>
      <textarea cols="60" rows="6" placeholder="請輸入需要注意的事項" name="attention">
      </textarea> </br><br>   

      <input type="reset" value="全部重填">
      <input type="submit" value="我要訂票"><br> 
</form>

</body>
</html>