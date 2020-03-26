<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A1073312 確認頁面</title>
  </head>
  <body bgcolor="#CCEEFF">
    <form>
      <center>
          <?php
            echo "感謝您的購買！<br/>";
            $name="潘品璇";
            $tickets=2;
            if($tickets>0){
              echo "祝" . $name . "旅途愉快！<br/>";
            }
            else{
              echo "請選擇正確的張數！<br/>";
            }
          ?>
      </center>
    </form>
  </body>
</html>