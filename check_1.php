<html>
<head>
<script>
function alertshow()
{
        alert("Error Password or Username");
}
</script>
</head>
<body>
<?php

$filename = 'data.txt';
$userval=$_POST["userid"];
$passval=$_POST["pswrd"];
$updateval =$_POST["text"];

if($userval == "user" && $passval == "pass")
  {

// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'r+')) {
         echo "Cannot open file ($filename)";
         exit;
    }

    // Write $somecontent to our opened file.
    if (fwrite($handle,"User Id: ".$userval,20) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
        fwrite($handle,"\r\nPassword: ".$passval,20);
        fwrite($handle,"\r\nUpdate: ".$updateval,200);
    echo "Success, wrote ($somecontent) to file ($filename)";
	 fclose($handle);

} else {
    echo "The file $filename is not writable";
}
  }

 else
 {
echo "<script>alertshow();</script>";
}

?>
</body>
</html>
