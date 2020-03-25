<meta charset="utf-8">
<?php

$name = $_POST["name"];
$gender = $_POST["gender"];
$bday = $_POST["birth"];
$id = $_POST["personal_id"];
$phonenumber = $_POST["phonenumber"];
$mail = $_POST["mail"];
$address = $_POST["address"];
$school = $_POST["school"];
$parentname = $_POST["parentname"];
$parentphone = $_POST["parentphone"];
$eat = $_POST["eat"];
$eatoher = $_POST["eatoher"];
$disease = $_POST["disease"];
$diseaseother = $_POST["diseaseother"];
$size = $_POST["size"];
$livenumber = count($_POST["live"]);
$comment = $_POST["comment"];


echo "姓名:".$name."<br/>";
echo "性別:".$gender."<br/>";
echo "生日:".$bday."<br/>";
echo "身分證字號:".$id."<br/>";
echo "電話:".$phonenumber."<br/>";
echo "E-mail:".$mail."<br/>";
echo "地址:".$address."<br/>";
echo "就讀學校:".$school."<br/>";
echo "家長姓名:".$parentname."<br/>";
echo "家長電話:".$parentphone."<br/>";
echo "飲食習慣:".$eat."<br/>";
echo "飲食習慣(其他):".$eatoher."<br/>";
echo "健康狀況:".$disease."<br/>";
echo "健康狀況(其他):".$diseaseother."<br/>";
echo "營服尺寸:".$size."<br/>";
echo $livenumber."<br/>";
for($i=0;$i<$livenumber;$i++)
{
	echo "居住地".$_POST["live"][$i]."<br/>";
}
echo "備註:".nl2br($comment)."<br/>";

?>