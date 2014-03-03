<?php include("newsheader.php");?>
<?php include("config.php");?>
<div id="maindiv">
<header>
<br>
    
 
<br><h2 style="color:#780000;">
<?php 
mysql_connect($dbhost,$username,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$data = mysql_query("SELECT * FROM $table WHERE id=1") or die(mysql_error());
while($info = mysql_fetch_array( $data ))
{
Print "<tr>";
Print "<td>".$info['heading'] . "</td> ";
}
?>
</h2> 
<br>
<img  src="newsheader_files/c.jpg" name="ABCnews" width="640" height="410" alt="Tsunami in china" /> 
<br> <br><br>  
<p>
<?php 
mysql_connect($dbhost,$username,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$data = mysql_query("SELECT * FROM $table WHERE id=1") or die(mysql_error());
while($info = mysql_fetch_array( $data ))
{
Print "<tr>";
Print "<td>".$info['Announcement'] . "</td> ";
}
?>	
</p><br><br><br><br>
</header>
<div class="clear"></div>
</div>
</div>
<?php include("footer.php"); ?>