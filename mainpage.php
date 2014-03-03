<?php include("newsheader.php");?>
<?php include("config.php");?>
<div id="maindiv">
<header>
   <a href="brkng.php"><img class="img-right" src="newsheader_files/c.jpg" name="ABCnews" width="440" height="310" alt="Tsunami in china" /></a>
 
<br><h2 ><a href="brkng.php" style="color:#780000 "; >Breaking news</a></h2> 
<br>
    
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
</p>
</header>

<article class="story">
<div>
    <h1 style="color:#484848 ; padding-top:20px;">National news </h1></br>
	<a href="news1.php"><img src="newsheader_files/1.jpg" width="280" height="180" alt="parade on 26th jan" style=" margin-top:10px; border:solid black 1px; margin-left:20px;" />
	</a>
	<p style="color:#DC143C; margin-top:10px; font-family:Times new roman; float:right; margin-right:80px; font-size:95%;">
  
 <br><a href="">Film industry</a><br>
  <a href="">Tech news</a><br>
  <a href="">Politics</a><br>
  <a href="">Environmental news</a><br>
  <a href="">Business news</a>
  </p>
  <div style=" width: 330px;">
   <p style="font-size:80%";> 
   <?php
mysql_connect($dbhost,$username,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$data = mysql_query("SELECT * FROM $table WHERE id=1") or die(mysql_error());
while($info = mysql_fetch_array( $data ))
{
Print "<tr>";
Print "<td>".$info['Submitted'] . "</td> ";
}?>
</p></div>
 
 </div>
    <div>
    <h1 style="color:#484848 ; padding-top:20px;">International news</h1></br>
	<a href="news2.php"><img src="newsheader_files/2.jpg" width="280" height="180" alt="xyz" 
	style=" margin-top:10px; border:solid black 1px; margin-left:20px;" /></a>
	<p style="color:#606060 ; margin-top:10px; font-family: Times new roman; float:right; margin-right:80px; font-size:95%;">

   <br><a href="">Film industry</a><br>
   <a href="">Tech news</a><br>
   <a href="">Politics</a><br>
   <a href="">Environmental news</a><br>
   <a href="">Business news</a>
 </p>
   <div style=" width: 330px;">
 <p style="font-size:80%";> 
   <?php
mysql_connect($dbhost,$username,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$data = mysql_query("SELECT * FROM $table WHERE id=2") or die(mysql_error());
while($info = mysql_fetch_array( $data ))
{
Print "<tr>";
Print "<td>".$info['Submitted'] . "</td> ";
}?>
</p></div>
 
 </div>
</article>
</div>
<?php include("aside.php"); ?>
<?php include("footer.php"); ?>