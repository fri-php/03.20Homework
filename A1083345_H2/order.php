<html>

<head>

  <meta charset="utf-8">
  <title>A1083345 訂票頁面</title>

</head>

<body bgcolor="#DFDFDF">

  <font face="微軟正黑體">
    <h1 align="center" style="background-color: #4B4C4E">
      <font color="white">歡迎來到高大環鐵訂票系統</font>
    </h1>
    <h2 align="center">NUK RAILWAY</h2>
    <h3 align="center">HAHA YOU LAZY GUYS</h3>
    <h4 align="center"><font color="gray">國立高雄大學</font></h4>
    <h5 align="center"><font color="gray">108學年度 第二學期</font></h5>
    <h6 align="center"><font color="gray">網頁程式設計 期初考試</font></h6>
  </font>

  <center>
    <a href="price.php">
      <img src="https://upload.cc/i1/2020/03/11/uCbne0.png" height="25%">
    </a><br/>
    <font face="微軟正黑體">點擊Logo查看票價資訊</font>
  </center><br/><br/>

  <form action="result.php" method="post">
    <table bgcolor="black" align="center">

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E" width="100">
          <font color="white">姓名</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          <input type="text" name="name" placeholder="請填入文字" required>
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">學號</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          <input type="text" name="id" placeholder="請填入文字" required>
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">性別</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          <input type="radio" value="female" name="gender" checked>女性
          <input type="radio" value="male" name="gender">男性
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">票數</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          全票<input type="number" name="ticket_A" value="0" min="0" style="width:50px">張
          敬老票<input type="number" name="ticket_B" value="0" min="0" style="width:50px">張
          愛心票<input type="number" name="ticket_C" value="0" min="0" style="width:50px">張
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">起訖站</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          起程站
          <select name="start">
            <option value="s1">管理學院</option>
            <option value="s2">法學院</option>
            <option value="s3">圖資</option>
            <option value="s4">理學院</option>
            <option value="s5">學二宿舍</option>
            <option value="s6">工學院</option>
            <option value="s7">行政大樓</option>
          </select>
          到達站
          <select name="end">
            <option value="d1">管理學院</option>
            <option value="d2">法學院</option>
            <option value="d3">圖資</option>
            <option value="d4">理學院</option>
            <option value="d5">學二宿舍</option>
            <option value="d6">工學院</option>
            <option value="d7">行政大樓</option>
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">座位喜好</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          <input type="radio" value="none" name="seat" checked>不指定
          <input type="radio" value="window" name="seat">靠窗優先
          <input type="radio" value="aisle" name="seat">走道優先
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">連絡電話</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          <input type="text" name="phone" placeholder="請填入電話號碼" required>
        </td>
      </tr>

      <tr align="center" height="40">
        <th bgcolor="#4B4C4E">
          <font color="white">電子信箱</font><font color="yellow">*</font>
        </th>
        <td bgcolor="white">
          <input type="email" name="email" placeholder="請填入電子信箱" style="width:250px" required>
        </td>
      </tr>

      <tr align="center" height="200">
        <th bgcolor="#4B4C4E"><font color="white">備註</font></th>
        <td bgcolor="white">
          <textarea cols="80" rows="10" name="comment"></textarea>
        </td>
      </tr>
    </table><br/>

    <center>
      <input type="reset" value="全部重填">
      <input type="submit" value="我要訂票"><br/><br/>
    </center>

  </form>

</body>

</html>