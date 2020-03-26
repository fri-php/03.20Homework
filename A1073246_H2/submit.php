<html>
    <meta charset="utf-8">
<?php


$username = $_POST["user_name"] ;
$gender = $_POST["gender"] ;
$userid = $_POST["user_id"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$start = $_POST["step"];
$seat = $_POST["seat"];
$ticket = $_POST["ticket"];
$tnum = $_POST["num"];

$i = count($ticket);
$j = count($tnum);

echo $username."<br>" ;
echo $gender."<br>" ;
echo $userid."<br>" ;
echo $tel."<br>" ;
echo $email."<br>" ;
echo $start."<br>" ;
echo $seat."<br>" ;


/*foreach($ticket as $key => $value){
    echo "票種:".$ticket."<br" ;
}
/*for($k=0;$k<$i;$k++){
    echo $ticket[$k].$tnum[$k]."<br>";
}*/

echo nl2br(htmlspecialchars($comment));





?>

</html>