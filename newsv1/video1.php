<?php include("newsheader.php");?>
<?php include("config.php");?>
<br><br>
  <?php
mysql_connect($dbhost,$username,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$data = mysql_query("SELECT video FROM $table WHERE id=2") or die(mysql_error());
while($info = mysql_fetch_array( $data ))
{
$imp = $info['video'];
$vl= "//www.youtube.com/embed/$imp " ;
}
?>
<iframe src= "<?php echo $vl; ?>"   width="490" height="405"  ></iframe>


<?php include("aside.php"); ?>
<?php include("footer.php"); ?>