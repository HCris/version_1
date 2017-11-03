<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php
		include("components/link.php");
	?>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<!-- Beginning navbar-->
	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">
				<img src="img/logo.png" alt="">
			</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="sass.html">Home</a></li>
				<li><a href="badges.html">About us</a></li>
				<li><a href="collapsible.html">Flatures</a></li>
				<li><a href="sass.html">Blog</a></li>
				<li><a href="badges.html">Portofolio</a></li>
			</ul>
		</div>
	</nav>
<!-- end navbar-->
<!-- Beginning section1-->
	<section class="section_1">
		<div class="row">
			<div class="col s10 offset-s1 m6 offset-m1 l8">
				<div class="title">
					<h1>SIMPLE<span class="point">.</span></h1>
					<h1 class="normal">MORE!</h1>
					<h3>BE FREE. DO IT YOURWOY!</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="col s12 m4 l4 secton_right">
				<div class="phone">
					<img src="img/phone.png" alt="phone">
				</div>
			</div>
		</div>
	</section>
<!-- end section1-->
	<section>
		<div class="container">
			<div class="row">
				<h4>WHAT WE <span class="lOVE">LOVE TO DO</span><span class="point">.</span></h4>
				<div class="col s4 box">
					<div class="service">
						<i class="material-icons">autorenew</i>
					</div>
					<div class="text_servis">
						<p>REFRESHING DESIGN</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					<div class="service">
						<i class="fa fa-floppy-o" aria-hidden="true"></i>
					</div>
					<div class="text_servis">
						<p>REFRESHING DESIGN</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>

				<div class="col s4 box">
					<div class="service">
						<i class="fa fa-coffee" aria-hidden="true"></i>
					</div>
					<div class="text_servis">
						<p>STAY AWAKE</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					<div class="service">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</div>
					<div class="text_servis">
						<p>STAY AWAKE</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col s4 box">
					<div class="service">
						<i class="fa fa-file" aria-hidden="true"></i>
					</div>
					<div class="text_servis">
						<p>CODE WITH LOVE</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					<div class="service">
						<i class="fa fa-leaf" aria-hidden="true"></i>
					</div>
					<div class="text_servis">
						<p>CODE WITH LOVE</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
		</div>
		</div>
	</section>
<?php include("components/script.php"); ?>
</body>
</html>