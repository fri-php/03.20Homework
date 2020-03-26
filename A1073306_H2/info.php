<html></html>

<?php
    $Name = $_POST["Name"];
    $Sid = $_POST["Sid"];
    $Gender = $_POST["gender"];
    $Adult_tick = $_POST["adult"];
    $Older_tick = $_POST["older"];
    $Heart_tick = $_POST["heart"];
    $Dept = $_POST["depart"];
    $Dest = $_POST["destination"];
    $Seat = $_POST["Seat"];
    $Phone = $_POST["phone"];
    $Email = $_POST["email"];
    $Message = $_POST["message"];

    if($Gender == "Male"){
        echo $Name."先生您好!您已經訂票成功囉!"."<br/>";
    }else{
        echo $Name."小姐您好!您已經訂票成功囉!"."<br/>";
    }
    echo "您的學號為".$Sid."<br/>";
    echo "您一共訂購了".$Adult_tick."張全票".$Older_tick."張敬老票和".$Heart_tick."張愛心票"."<br/>";
    echo "您將於".$Dept."上車，目的地為".$Dest."<br/>";
    echo "我們將通過".$Phone."和".$Email."聯絡您其他相關事項"."<br/>";
    echo "關於您的備註「".nl2br(htmlspecialchars($Message))."」我們會詳細閱讀並將之執行"."<br/>";
    echo "感謝您對於高大校環鐵的支持與愛護，歡迎再次使用高大校環鐵的服務"."<br/>";
?>