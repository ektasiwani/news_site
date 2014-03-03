<?php
include("config.php");
$link = $_POST['link'] ;
$parts = explode("/", $link);
$code = $parts[count($parts)-1];


$con = mysql_connect($dbhost,$username,$password);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }



mysql_select_db("epicnati_basicannounce", $con);



$sql="INSERT INTO announcements (Announcement,Submitted,Date_time,heading,video)

VALUES

('$_POST[Announcement]','$_POST[Submitted]',('y-m-d h:i:s'),'$_POST[heading]','$code')";



if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Announcement Saved and Displayed";



mysql_close($con)

?> 