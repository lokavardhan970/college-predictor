<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="rgukt-logo.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet"  href="common.css">
	<title>college predictor</title>
	<style>
		body{
			background-image:url(1.jpg);
			background-size:cover;
		}
	</style>
</head>
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
				<a class="nav-link active" aria-current="page" href="#">Home</a>
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
				  <a class="nav-link"  href="practice.php">About us</a>
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
			     	<img class="img-fluid" src="" alt="logo">
				</div>
			</div>
		 </div>
	 </section>
	<div class="background">
		<i class="fa fa-quote-left"></i><p>Research shows that there is only half as much variation in student achievement between schools as there is among classrooms in the same school. If you want your child to get the best education possible, it is actually more important to get him assigned to a great teacher than to a great school.</p>
	</div>
	<div class="background">
		<h2>College Predictor</h2><br>
		<form method="post" action="home.php">
			<div id="center">
				<input class="ip" type="text" name="board" placeholder="Board's Percentage" required><br><br>
				<input class="ip" type="text" name="jee" placeholder="JEE Score" required><br><br>
				<input class="ip" type="text" name="bits" placeholder="BITS Score"><br><br>
				<input class="ip" type="text" name="srm" placeholder="SRMJEEE Score"><br><br>
				<input class="ip" type="text" name="vit" placeholder="VITEEE Score"><br><br>
				<input class="button" type="submit" name="submit" value="SUBMIT">
			</div>
		</form>
	</div>
	<?php 
		function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}

			if(isset($_POST['submit']))
			{
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$board = test_input($_POST['board']);
					$jee = test_input($_POST['jee']);
					$bits = test_input($_POST['bits']);
					$srm = test_input($_POST['srm']);
					$vit = test_input($_POST['vit']);

					echo "<div class='background'>";
					echo "<h2>Predicted College</h2>";
					if($board<60)
						echo "Colleges won't accept your application";
					else
					{
						$avg = (($board*60) + ((($jee*100)/360)*40))/100;
						if($avg>87)
							echo "You are eligible to apply for Indian Institute of Technology<br>";
						else if($avg>60)
							echo "You are eligible to apply for National Institute of Technology<br>";
						if($bits>280)
							echo "You are eligible to apply for Birla Institure of Technology and Science<br>";
						if($srm>140)
							echo "You are eligible to apply for Sri Ramaswamy Memorial<br>";
						if($vit>80)
							echo "You are eligible to apply for Vellore Institute of Technology<br>";
					}
					echo "</div>";
				}
			}
	?>

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
