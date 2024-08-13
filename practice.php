<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="practice.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="rgukt-logo.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet"  href="common.css">
	<title>college predictor</title>
	<style>
		body{
			background-image:url(4.jpg);
			background-size:cover;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg  sticky-top navbar-expand-sm navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php">
			  <img src="rgukt-logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> RGUKT
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="home.php">Home</a>
				</li>
				
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Academic
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li><a class="dropdown-item" href="http://bseaps.in/">Board </a></li>
					<li><a class="dropdown-item" href="https://jeeadv.ac.in/">JEE</a></li>
					<li><a class="dropdown-item" href="https://www.bitsadmission.com/">BITS</a></li>
					<li><a class="dropdown-item" href="https://www.srmist.edu.in/admission-india/">SRM JEE</a></li>
					<li><a class="dropdown-item" href="https://viteee.vit.ac.in/">VIT EEE</a></li>
				</ul>
				</li>

				<li class="nav-item">
				  <a class="nav-link active"  href="practice.php">About us</a>
				</li>
				<li class="nav-item">
						<a class="nav-link" href="login.php">Login <?php
						if(isset($_SESSION['username']))
							{
								echo $_SESSION['username'];
							}
						?>? Logout</a>
    		    </li>
			</ul>
			</div>
		</div>
	</nav>
	<section class="banner-sec">
         <div class="conatiner">
			<div class="row justify-content-center">
				<div class="banner-img text-center">
					<img class="img-fluid" src="pratice-logo.jpg" alt="logo">
				</div>
			</div>
		 </div>
	 </section>
	<div class="background">
		<i class="fa fa-quote-left"></i><p>Nothing in this world can take the place of persistence. Talent will not: nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.</p>
	</div>
	<div class="background">
		<h2>About Us</h2>
		<p>CollegeShiksha.com is a one-stop-solution making course and college selection easy for students looking to pursue undergraduate (UG) and postgraduate (PG) courses in India and abroad; also accessible to users on the move through the website’s mobile site. Launched in 2008, CollegeShiksha.com belongs to Info Edge (India) Ltd, the owner of established brands like Naukri.com, 99acres.com, Jeevansathi.com, among several others. With this strong brand pedigree, CollegeShiksha offers its users the unique privilege of customised tools like Alumni Employment Statistics that includes salary data powered by Naukri.com.</p>

		<p>Our website is a repository of reliable and authentic information for over 14,000 institutions, 40,000 plus courses and has a registered data base of more than 3.5 million students. We offer specific information for students interested in UG/PG courses in India (Collegeshiksha.com) and Abroad (studyabroad.Collegeshiksha.com) across the most popular educational streams – Management; Science & Engineering; Banking & Finance; Information Technology; Animation, VFX, Gaming & Comics; Hospitality, Aviation & Tourism; Media, Films & Mass Communication; Design; Medicine, Beauty & Health Care; Retail; Arts, Law, Languages & Teaching; and Test Preparation.</p>

		<p>Education seekers get a personalised experience on our site, based on educational background and career interest, enabling them to make well informed course and college decisions. The decision making is empowered with easy access to detailed information on career choices, courses, exams, colleges, admission criteria, eligibility, fees, placement statistics, rankings, reviews, scholarships, latest updates etc as well as by interacting with other CollegeShiksha.com users, experts, current students in colleges and alumni groups. We have introduced several student oriented products and tools like Career Central, Common Application Form, Top Colleges, College Compare, Alumni Employment Stats, Campus Connect, College Reviews, College Predictors, MyShortlist and College Shiksha Café.</p>

		<p>Our active ask and answer community called College Shiksha Café has over 1000 experts answering career and college related queries. Students can ask questions, participate in discussions and stay updated with latest news, articles related to their education interest. CollegeShiksha.com is India’s smartest college gateway that blends higher education related domain knowledge, with technology, innovation, and credibility to give students personalised insights to make informed career, course and college decisions.</p>
	</div>

	<footer>
	<nav class="navbar navbar-expand-lg  sticky-top navbar-expand-sm bgcolor">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php">
			  <img src="rgukt-logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> RGUKT
			</a>
			
			<div class="text-center">
				<p class="cp-text">
					© Copyright 2023. All rights reserved.
				</p>
			</div>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link"  href="practice.php">About us</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link"  href="login.php">Login/Logout</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>
