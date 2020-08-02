<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173544758-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173544758-2');
</script>
<!--End of the Google Analytics-->
<meta charset="utf-8">
<meta name="author" content="Andreas Haug Nygaard">
<meta name="keywords" content="Andreas Haug Nygaard, Andreas Haug Nygaard contact, Andreas Haug Nygaard email, Andreas Haug Nygaard phone, Andreas Haug Nygaard website">
<meta name="description" content="Here you can see how to contact me.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Andreas Haug Nygaard's CV</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/queries.css" rel="stylesheet" type="text/css">
<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style type="text/css">
	body{
	background-image:url(img/bg-orange-layout1.jpg);
	}
</style>

<link rel="apple-touch-icon" sizes="180x180" href="http://www.andreashnygaard.com/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://www.andreashnygaard.com/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://www.andreashnygaard.com/img/favicons/favicon-16x16.png">
<link rel="manifest" href="http://www.andreashnygaard.com/img/favicons/site.webmanifest">
<link rel="mask-icon" href="http://www.andreashnygaard.com/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="http://www.andreashnygaard.com/img/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="http://www.andreashnygaard.com/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

</head>
<body>
	<div class="container">
		<ul class="nav-bar">
			<li><a href="http://andreashnygaard.com/"><i class="ion-ios-home"></i> HOME</a></li>
			<li><a href="http://andreashnygaard.com/andreas-haug-nygaard-experience.html"><i class="ion-earth"></i> EXPERIENCE</a></li>
			<li><a href="http://andreashnygaard.com/andreas-haug-nygaard-education.html"><i class="ion-university"></i> EDUCATION</a></li>
			<li><a href="http://andreashnygaard.com/andreas-haug-nygaard-skills.html"><i class="ion-wrench"></i> SKILLS</a></li>
			<li><a href="http://andreashnygaard.com/andreas-haug-nygaard-contact.php" class="actual-page"><i class="ion-email"></i> CONTACT</a></li>
		</ul>
	<div class="division-one">
<h1><strong style="font-size:30px">Andreas</strong><strong style="color:#e67e22; font-size:30px"> Haug Nygaard</strong><br><p style="font-size:10px;padding-bottom:2%"> RESEARCHER | ANALYST | LANGUAGES | CULTURE | IT</p></h1>
	<img src="http://andreashnygaard.com/img/andreasprofilepic.jpg" alt="Andreas Haug Nygaard Profile Picture">
<div class="description">
		<p>
			Age: <strong>28 years</strong><br>
			Location: <strong>Dublin, Ireland</strong><br>
			Professional work experience: <strong>4 years</strong><br>
			University degree: <strong>Master</strong><br>
			Driving license: <strong> Car Class B</strong><br>
			Email: <strong style="font-size:17px;"><a href="mailto:andreas.haug.nygaard@gmail.com" target="_blank">andreas.haug.nygaard@gmail.com</a></strong><br>
			Phone: <strong>+47 98097329</strong><br>
			<!--Website: <a href="#" target="_blank"><strong>Andreas' webpage</strong></a><br>-->
			CV: <a href="http://andreashnygaard.com/cv/Andreas_Haug_Nygaard_resume_letter.pdf" target="_blank"><strong>Click here to download</strong></a><br>
		</p>
</div>
		<hr>
			<ul>
				<li>
					<a href="https://www.linkedin.com/in/andreas-haug-nygaard-080615111/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
				</li>
				<li>
					<a href="https://www.facebook.com/andreas.h.nygard" target="_blank"><i class="ion-social-facebook-outline"></i>	</a>
				</li>
				<li>
					<a href="https://www.instagram.com/andreashn2504/?hl=nb" target="_blank"><i class="ion-social-instagram-outline"></i></a>	
				</li>
				</ul>
				<div class="extra-icon">
				<ul>
				<li> 
					<a href="https://vk.com/id183451224" target="_blank"><i class="ion-social-vimeo-outline"></i></a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCO-4qdbOcfEFomwJTVa1Z1A?view_as=subscriber" target="_blank"><i class="ion-social-youtube-outline"></i></a>
				</li>
				<li>
					<a href="https://github.com/Andreashn1" target="_blank"><i class="ion-social-github-outline"></i></a>
				</li>
			
			</ul>
		</div>
	</div>
<!--second division-->
<div class="division-two" style="height:768px;">
	<h2>
		<i class="ion-chatbox-working"></i>
		<strong>Contact me</strong>
	</h2>
		<p style="margin-right:1%; margin-top:0.5%;"> You can contact me by email andreas.haug.nygaard@gmail.com, phone +47 98097329 or simply fill out the form below, and I will answer your query as soon as possible.<br></p>
		<hr>
		<!--First we need to create the form tag-->
		<form method="post" action="mailer-new.php" class="contact-form">
			<!--here we will insert a php code, so for the form work we need to save our file as .php, as you can see we will insert a div and some css inside the php as well-->
		<?php
			 							 if($_GET['success'] == 1) {
				 						 echo "<div style=\"text-align:center; color:#090;\">Thank you! Your message has been sent.</div>";
			 							 }
			 							 if($_GET['success'] == -1) {
				 						 echo "<div style=\"text-align:center; color:#F00;\">Ooops! Something went wrong.</div>";
			 							 }
			 							 ?>

			<div class="division-five">
				<label for="firstname">Firstname:</label>
			</div>

			<div class="division-six">
				<!-- place holder as an attribute to show some information for our users inside the field.-->
				<input type="text" name="firstname" id="firstname" placeholder=" Your Firstname" required>
			</div>

			<div class="division-five">
				<label for="surname">Surname:</label>
			</div>

			<div class="division-six">
				<input type="text" name="surname" id="surname" placeholder=" Your Surname" required>
			</div>

			<div class="division-five">
				<label for="email">E-mail:</label>
			</div>

			<div class="division-six">
				<input type="email" name="email" id="email" placeholder=" Your E-mail" required>
			</div>

			<div class="division-five">
				<label for="phone">Phone:</label>
			</div>

			<div class="division-six">
				<input type="phone" name="phone" id="phone" placeholder=" Your Phone Number" required>
			</div>

			<div class="division-five">
			<label for="message">Message:</label>
			</div>

			<div class="division-six">
				<textarea name="message" placeholder="Please type your message here"></textarea>
			</div>
		
			<div class="division-six">
			<input type="submit" value="Send it">
			</div>
			
			</div>
		</form>
</div>
<footer>
	<p>Copyright &copy; 2020. All rights reserved.</p>
</footer>

</div>
</body>
</html>