<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="An awesome coming soon page designed by Orman Clark and coded by João Sardinha" />
<meta name="keywords" content="coming, soon, page, orman, clark, john, sardine, johnsardine, download" />

<title>Coming Soon Splash Page CSS3</title>

<link rel="stylesheet" href="style.css">

<style type="text/css">
/*
This was coded by João Sardinha
Visit me at http://johnsardine.com/

It has been tested in all modern browsers.

This coming soon page design has been created by the awesome Orman Clark,
you can download a PSD version of this at his website, PremiumPixels.
http://www.premiumpixels.com/freebies/coming-soon-splash-page-psd/
*/
</style>




</head>

<body>

<div id="coming-soon">

<h1>data.film - The next generation movie database</h1>


<p>Data is becoming increasingly important to develop and market good movies.
While the demand for data is high its availability is low!
 Data is scattered throughout various proprietary data silos. 
<b>data.film</b> is working hard on building an innovative 
data marketplace for film professionals and data providers.
</p>
<p><br /></p>
<p>Interested? Subscribe to our mailing list:


<?php

if($_POST['email']){

$myfile = fopen("/opt/emails.txt", "a+") or die("Unable to open file!");
fwrite($myfile, "\n".date("H:i d.m.Y")." ");
fwrite($myfile, $_POST['email']);
fclose($myfile);
print("<h3 style='text-align:center'>Email saved!</h3>");
}

?>


<form method="post" action="index.php">
	<div id="subscribe">
		<input type="text"  name="email" placeholder="enter your email address...">
		<input type="submit" value="Submit">
		<div class="clear"></div>
	</div>
</form>
</p>

<br><br>
<p> data.film is an equix project - <a href ="imprint.html">Imprint</a></p>

</div>

</body>
</html>
