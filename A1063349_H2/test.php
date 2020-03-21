<html><meta http-equiv="content-type" content="text/html; charset=utf-8"></html>
<?php
//    $i = 10;
//    $j = "Hello";
//    $z = 5.5;
//    echo "<b>hello world</b>" . $i*$z . "!!!" . $j."<br/>";
    
    $name = $_POST["name"];
    $gender=$_POST["gender"];
    $birth = $_POST["birth"];
    $id = $_POST["id"];
    $tel = $_POST["tel"];
    $name1 = $_POST["name1"];
    $relationship = $_POST["relationship"];
    $tel1 = $_POST["tel1"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $school = $_POST["school"];
    $class = $_POST["class"];
    $size = $_POST["size"];
    $Vegetarian = $_POST["Vegetarian"];
    $food = $_POST["food"];
    $sick = $_POST["sick"]; 
    $transportation = $_POST["transportation"];
    $transportation1 = $_POST["transportation1"];
    $participate = $_POST["participate"];
    $reason = $_POST["reason"];
    $expect = $_POST["expect"];
    $comment = $_POST["comment"];

    echo $_POST["name"]."<br/>";
    echo $gender."<br/>";
    echo $_POST["birth"]."<br/>";
    echo $_POST["id"]."<br/>";
    echo $tel."<br/>";
    echo $_POST["name1"]."<br/>";
    echo $_POST["relationship"]."<br/>";
    echo $tel1."<br/>";
    echo $_POST["address"]."<br/>";
    echo $_POST["email"]."<br/>";
    echo $_POST["school"]."<br/>";
    echo $_POST["class"]."<br/>";
    echo $size."<br/>";
    echo $Vegetarian."<br/>";
    echo $_POST["food"]."<br/>";
    echo $_POST["sick"]."<br/>";
    echo $transportation."<br/>";
    echo $transportation1."<br/>";

    foreach ($_POST["information"] as $value){
        echo $value."<br/>";
        echo implode("-",$_POST["information"])."<br/>";
    }
    echo $participate."<br/>";
    echo $_POST["reason"]."<br/>";
    echo nl2br(htmlspecialchars($expect));
    echo nl2br(htmlspecialchars($comment));
    

?>