<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A1073312 訂票頁面</title>
  </head>
  <body bgcolor="#CCEEFF">
    <form>
      <center>
        <FONT SIZE=40 COLOR=#483D8B>國立高雄大學 校園環狀鐵路 訂票網站</FONT>
        <h1>歡迎來到訂票網站</h1>
        <h2>點選下方圖示可以連結至價目表</h2>
        <h3><a href="price.html"><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></a></h3>
        <h4>如欲訂購環狀鐵路之火車票</h4>
        <h5>請完整填寫下方資料</h5>
        <h6>國立高雄大學 校園環狀鐵路 感謝您的來訪</h6> 
    姓名：<input type="text" name="User" size="15" required /><br/>
    學號：<input type="password" name="ID" size="15" required /><br/>
    性別：
    <input type="radio" name="Gender"
                value="male" checked="True" required />男
    <input type="radio" name="Gender"
                value="female" required />女<br/>
    票數：
      全票：<select name="Anumber" required >
      <option value="A1">0</option>
      <option value="A2">1</option>
      <option value="A3">2</option>
      <option value="A4">3</option>
      <option value="A5">4</option>
      <option value="A6">5</option>
      <option value="A7">6</option>
      <option value="A8">7</option>
      <option value="A9">8</option>
      <option value="A10">9</option>
      <option value="A11">10</option>
      </option>
      </select>
      敬老票：<select name="Bnumber" required >
        <option value="B1">0</option>
        <option value="B2">1</option>
        <option value="B3">2</option>
        <option value="B4">3</option>
        <option value="B5">4</option>
        <option value="B6">5</option>
        <option value="B7">6</option>
        <option value="B8">7</option>
        <option value="B9">8</option>
        <option value="B10">9</option>
        <option value="B11">10</option>
      </option>
      </select>
      愛心票：<select name="Cnumber" required >
        <option value="C1">0</option>
        <option value="C2">1</option>
        <option value="C3">2</option>
        <option value="C4">3</option>
        <option value="C5">4</option>
        <option value="C6">5</option>
        <option value="C7">6</option>
        <option value="C8">7</option>
        <option value="C9">8</option>
        <option value="C10">9</option>
        <option value="C11">10</option>
      </option>
      </select><br/>
      起站：
      <select name="start" required >
        <option value="s1">管理學院</option>
        <option value="s2">法學院</option>
        <option value="s3">圖資</option>
        <option value="s4">理學院</option>
        <option value="s5">學二宿舍</option>
        <option value="s6">工學院</option>
        <option value="s7">行政大樓</option>
      </select>
      屹站：
      <select name="end" required >
        <option value="e1">管理學院</option>
        <option value="e2">法學院</option>
        <option value="e3">圖資</option>
        <option value="e4">理學院</option>
        <option value="e5">學二宿舍</option>
        <option value="e6">工學院</option>
        <option value="e7">行政大樓</option>
      </select><br/>
      座位喜好：
      <input type="radio" name="Seat"
                value="aisle" checked="True" required />靠走道
      <input type="radio" name="Seat"
                value="window" required />靠窗
      <input type="radio" name="Seat"
                value="nochooce" required />無偏好<br/>
      聯絡電話：<input type="password" name="Phone" size="15" required /><br/>
      信箱：<input name="email" id="email" type="email" required /><br/>
      備註：<textarea name="PS" rows="5" cols="50"></textarea><br/>
    </br>
      <input type="reset" value="全部重填">
      <input type="button" value="我要訂票" onclick="location.href='show.php'"><br/>
    </center>
    </form>
  </body>
</html>