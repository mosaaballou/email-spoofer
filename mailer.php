<!--
###############################
* CREATED BY Hak9        *
* xHak9x                 *
###############################
-->

<?php
if (isset($_POST['ajax'])) {
$to = $_GET['to'];
$subject = $_GET['sub'];
$msg = $_GET['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_GET['name']."<".$_GET['from'].">";

$send = mail($to,$subject,$msg,$headers);

if ($send) {
	echo "<p id='success'>✔️  $to</p>";
}else{
	echo "<p id='error'>❌  $to</p>";
}
exit();
}
?>
