<html>
<body>
<?php

$filename = 'data.txt';
$userval=$_POST["userid"];
$passval=$_POST["pswrd"];
$idval=$_POST["id"];
$updateval =$_POST["text"];

if($userval == "user" && $passval == "pass")
  {
include('simple_html_dom.php');
$html=file_get_html('target.html');
#echo $idval;
$single= $html->getElementById($idval);
$data= $updateval;
$single->innertext=$data;
#echo $data;
#$single2= $html->getElementById("id2");
#$single2->innertext=$data;
$html->save('target.html');
 }
else
{
echo $idval;
}

?>
</body>
</html>
