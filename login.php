<?php
	session_start();
	if(isset($_SESSION['username']))
		unset($_SESSION['username']);
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>college predictor</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
	<link rel = "icon" href = "rgukt-logo.png" type = "image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet"  href="common.css">
</head>
<body><!--http://mrwallpapers.com/wp-content/uploads/2018/10/wall-leaves-wooden-background-images-hd.jpg-->

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
				  <a class="nav-link"  href="practice.php">About us</a>
				</li>
				<li class="nav-item">
						<a class="nav-link active" href="login.php">Login <?php
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
<div>
<div class="form" id="login">
	<div class="box">
	<h3>LOGIN</h3>
	<div class="social-container">
		<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	</div>
	<div>
		<?php
			function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			if(isset($_POST['login']))
			{
				session_start();
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$username = test_input($_POST['Username']);
					$password = test_input($_POST['Password']);
					//echo $username,"<br>";
					//echo $password;

					$link = mysqli_connect("localhost", "root", "");
					if (mysqli_connect_errno()) {
    					printf("Connect failed: %s\n", mysqli_connect_error());
    					exit();
					}
					mysqli_select_db($link,"webdevelopment_cms");
					$results=mysqli_query($link,"select * from usertable where Username='$username' and Password='$password'") or die("failed to connect".mysqli_connect_error());
					$row=mysqli_fetch_array($results);
					if ($row['Username'] == $username && $row['Password'] == $password) {
						header("location: home.php");
						$_SESSION['username'] = $username;
						$_SESSION['mes'] = "true";
					} 
					else {
					echo "Login failed";
					}
					mysqli_close($link);
				}
			} 
		?>	
	</div>
	<form action="login.php" method="POST">
		<input class="input" type="text" name="Username" placeholder="Username" required><br>
		<input class="input" type="password" name="Password" placeholder="Password" required><br>
		<input class="button" type="submit" name="login" value="LOGIN"><br>
		<a id="oksignup">Sign Up here</a> | <a href="#">Forgot Password?</a>
	</form>
    </div>
</div>
<div class="form reg" id="signup">
	<div class="box">
	<h3>SIGN UP</h3>
	<div class="social-container">
		<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	</div>
	<?php
		if(isset($_POST['signup']))
		{
			$usernameSub=$password1=$password2="";
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$usernameSub = test_input($_POST['Username']);
				$password1 = test_input($_POST['Password']);
				$password2 = test_input($_POST['ConfirmPassword']);

				$link = mysqli_connect("localhost", "root", "");
				if (mysqli_connect_errno()) {
    				printf("Connect failed: %s\n", mysqli_connect_error());
    				exit();
				}
				if(empty($usernameSub))
					array_push($error, "Please fill username");
				if(empty($password1))
					array_push($error, "Please fill password");
				if(empty($password2))
					array_push($error, "Please fill confirm password");
				if($password1 != $password2)
					echo "Password's don't match";
				else if($password1 == $password2)
				{
					mysqli_select_db($link,"webdevelopment_cms");
					$results=mysqli_query($link,"insert into usertable(Username,Password) values('$usernameSub','$password1')") or die("failed to connect".mysqli_connect_error());
					header('localhost: http://localhost/project/login.php');
					echo "Data Stored" ;
				}
				mysqli_close($link);
			}
		}
	?>
	<form action="login.php" method="POST">
		<input class="input" type="text" name="Username" placeholder="Username" required><br>
		<input class="input" type="password" name="Password" placeholder="Password" required><br>
		<input class="input" type="password" name="ConfirmPassword" placeholder="Confirm Password" required><br>
		<input class="button" type="submit" name="signup" value="SIGN UP"><br>
		<a id="oklogin">Login Here</a>
	</form>
    </div>
</div>
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
 <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="Login.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
