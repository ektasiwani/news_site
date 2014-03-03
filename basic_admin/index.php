<?php
// COPYRIGHT

// Admin Login (c) 2010 Scott Connell

// Redistribution without permission is forbidden.

// Source http://www.scottconnell.com



// INSTRUCTIONS

// Save this file with a .php extension



// SET VARIABLES ////////////////////////////////////////////



$password = "basicadmin";



// Change header and footer to match your site.

// Only between the ENDHTM tags.



function printHeader($pageTitle)

{

print <<<ENDHTM



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

	"http://www.w3.org/TR/html4/loose.dtd">



<html>

<head>

<title>$pageTitle</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

body {

	font: 14px Verdana;

}

h1,h2,p,pre {

	padding: 0px 0px 10px 0px;

	margin: 0;

}

form {

	padding: 0;

	margin: 0;

}

</style>

</head>



<body>

<img src="BAAdmin.gif"><br />

<h1>$pageTitle</h1>



ENDHTM;

}



function printFooter()

{

print <<<ENDHTM



</body>

</html>



ENDHTM;

}



// END Change header and footer. //////////////////////////



function printForm()

{

$action = $_SERVER["PHP_SELF"];



print <<<ENDHTM

<form method="post" action="$action">

<p><input type="password" name="pass" size="10" value=""/>

<input type="submit" value="Submit"/></p>

</form>



ENDHTM;

}



if($_POST['pass'])

{

	if(strtolower($_POST['pass']) == strtolower($password))

	{

	setcookie("LOGIN", md5($password), time()+(60*60*24*30), "/"); // 30 days



	printHeader("Logged In"); // Change to your logged in name.



	print "<p><a href=\"?logout\">Logout</a></p>\n";

	}

	else

	{

	printHeader("Whoops! Wrong password");

	printForm();

	exit(printFooter());

	}

}

else if($_SERVER['QUERY_STRING'] == "logout")

{

setcookie("LOGIN", md5($password), time()-(60*60*24*30), "/"); // -30 days

printHeader("Logged Out");

printForm();

exit(printFooter());

}

else if(!isset($_COOKIE['LOGIN']))

{

printHeader("Admin Login"); // Change to your page name.

printForm();

exit(printFooter());

}

?>



<!-- Add your restricted content -->

<p>You have gained access to the Admin News Entry form.</p><br />

To logout <a href="../basic_admin/index.php?logout">click here</a>,
<br />
<br />


<form action="insert.php" method="post">


breaking news to be shown: 

<input type="text" name="Announcement" />

international News:

<input type="text" name="Submitted"/>
 
 Heading:
 <input type="text" name="heading"/>
 
 Video links :
 <input type="text" name="link"/>

<input type="submit" />

</p>

</form>

<?php



exit(printFooter());



?>