
<!DOCTYPE html>
<html>
<head>
	<title>Md Ashraf Adib</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<div class="container">
	<div class="sidebar">
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="http://www.videoclass.co.nf">Blog</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="#">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>

		</nav>
	</div>
	
	<div class="content">

		<section class="hero">
			<div id="post">
<div id="contact_table">
<table >
<tr>
<th>Contact me</th>
</tr>
<tr>
<td>Your Name<input type="text" name="cname"></td>
</tr>
<tr>
<td>Message<input type="text" name="hrname"></td>
</tr>
<tr>
<td>Number <br><input type="number" name="number"></td>
<tr><td><button id="button">Submit</button></td></tr>
</tr>
</table>

</div>
</div>
		</section>

	</div>

<?php
if(isset(button))
{
$to_email = 'mdashrafadib@gmail.com';
$subject = 'cname';
$message = 'hrname';
$number = 'number';
mail($to_email,$subject,$message,$number);
}
?>

	<div class="footer">
		<footer>
			<ul>
				<li><a href="http://www.facebook.com/mdashrafadib/"><img src="./image/facebook.png" class="media_icon"><p>Facebook</p></a></li>
				<li><a href="#"><img src="./image/insta.png" class="media_icon"><p>Instagram</p></a></li>
				<li><a href="#"><img src="./image/twitter.png" class="media_icon"><p>twitter</p></a></li>
				<li><a href="#"><img src="./image/linkedin.png" class="media_icon"><p>Linked in</p></a></li>
			</ul>

		</footer>
    

	</div>

</div>

</body>
</html>