<html>
    <head>
        <meta charset="UTF-8">
        <title>[2020高雄大學資管營] 個人報名表</title>
    </head>
    
    <div style="text-align:center;"><h1>【2020高雄大學資管營】個人報名表</h1></div>
<!圖>
    <img src="S__517046278.jpg" style="display: block"; width="600px"; margin-left:100px><br/><br/>
<!資料> 
    <form action="test.php" method="POST">
    <b>姓名</b><input type="text" name="name"><br/><br/>
    <b>性別</b>&emsp;<input type="radio" value="男" name="gender">男
    &emsp;<input type="radio" value="女" name="gender">女<br/><br/>
    <b>出生日期</b><input type="date" name="birth"><br/><br/>
    <b>身分證字號</b><input type="text" name="id"><br/><br/>
    <b>聯絡手機</b><input type="tel" name="tel"><br/><br/>
    <b>緊急聯絡人姓名</b><input type="text" name="name1"><br/><br/>
    <b>緊急聯絡人關係</b><input type="text" name="relationship"><br/><br/>
    <b>緊急聯絡人電話或手機</b><input type="tel1" name="tel1"><br/><br/>
    <b>通訊地址</b><input type="text" name="address"><br/><br/>
    <b>E-mail</b><input type="text" name="email"><br/><br/>
    <b>就讀學校</b><input type="text" name="school"><br/><br/>
    <b>班級</b><input type="text" name="class"><br/><br/>
  
<!圖>
    <img src="tshirt.jpg" width="50%"><br/>
    <b>營服尺寸</b> 
    <select name="size">
        <option value="choose">--請選擇--</option>
        <option value="2S">2S</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="2L">2L</option>
    </select><br/><br/>

    <input type="radio" value="葷食" name="Vegetarian">葷食
    &emsp;<input type="radio" value="素食" name="Vegetarian">素食<br/><br/>
    特殊飲食習慣<input type="text" name="food"><br/><br/>
    特殊疾病<input type="text" name="sick"><br/><br/>
    如何前來營隊？<input type="radio" value="transportation" name="transportation">搭乘火車/高鐵/捷運至新左營高鐵站&emsp;
                <input type="radio" value="go-self" name="transportation">自行前往高雄大學<br/><br/>
    營隊結束後回家方式？<input type="radio" value="transportation" name="transportation1">至新左營高鐵站坐車&emsp;
                     <input type="radio" value="leave-self" name="transportation1">自行從高雄大學回家<br/><br/>
    您最初是如何得知本營隊之訊息(可複選)
    <select name="information[]" multiple>
        <option value="樂學camp營隊網">樂學camp營隊網</option>
        <option value="PickCamp大學營隊資訊平台">PickCamp大學營隊資訊平台</option>
        <option value="第8屆高大資管營Facebook粉絲專頁">第8屆高大資管營Facebook粉絲專頁</option>
        <option  value="第8屆高大資管營網站">第8屆高大資管營網站</option>
        <option value="大學營隊一覽表-教育部國民及學前教育署">大學營隊一覽表-教育部國民及學前教育署</option>
        <option value="大學生營隊資訊-輔導室">大學生營隊資訊-輔導室</option>
        <option value="校園宣傳">校園宣傳</option>
        <option value="宣傳海報">宣傳海報</option>
        <option value="親友介紹">親友介紹</option>
        &emsp;&emsp;<input type="text" value="other" placeholder="其他">
    </select><br/><br/>

    是否全程參與營隊？<input type="radio" value="yes" name="participate">是
            &emsp;<input type="radio" value="no" name="participate">否<br/><br/>
    若無法全程參加營隊，原因為何？<input type="text" name="reason"><br/><br/>
    自我介紹及營隊期許（字數不限）<textarea cols="30" rows="5" name="expect"></textarea><br/><br/>
    備註<textarea cols="30" rows="5" name="comment"></textarea><br/><br/>

    若有問題請私訊<a href="https://www.facebook.com/nukimcamp">高大資管營粉專</a><br/><br/>
    <input type="reset" value="重新輸入">
    <input type="submit" value="確定送出"><br/>
    </form>
    
</html>