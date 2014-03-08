<!DOCTYPE html>
<html>
<body>
<?php
include('simple_html_dom.php');
$html=file_get_html('target.html');
$single= $html->getElementById("change1");
$data= "changed";
$single2= $html->getElementById("change2");
$single2->innertext=$data;
$html->save('target.html');
 ?>
</body>
</html>
