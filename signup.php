<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>My First Deployed</title>
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
	</head>
<body>
<!-- THE HEADER LOGO AND NAVIGATION MENU-->
	<header class = "header">
	<nav class = "navbar navbar-expand-lg navbar-light bg-gray">
	<a class = "logo-image" href = "index.php">
	<img src = "image/header-logo.png" alt = "company logo" id = "logo">
	</a>
	<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
	<span class = "navbar-toggler-icon"></span></button>
	<script>
	let x = document.getElementById("logo").height = 40;
	</script>
<!-- later disable this first div below -->
<!--<div class = "container float-left"> -->
 <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
	<ul class = "navbar-nav mr-auto">
		<li class = "nav-item active">
			<a class = "nav-link" href = "index.php">Home<span class = "sr-only">(current)</span></a></li>
		<li class = "navbar-item dropdown">
			<a class = "nav-link active dropdown-toggle" href = "#" id = "dropdownMenuLink" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false"> Service </a>
			<div class = "dropdown-menu" aria-labelledby = "dropdownMenuLink">
				<a class = "dropdown-item" href = "ai.php">Artificial Intelligence</a>
				<a class = "dropdown-item" href = "ml.php">Machine Learning</a>
				<a class = "dropdown-item" href = "android.php">Mobile Android Development</a>
				<a class = "dropdown-item" href = "web.php">Web Development</a>
					<div class = "dropdown-divider"></div>
					<a class = "dropdown-item" href = "goodies.php">Goodies Onboarding</a>
					
			</div>
		</li>
		<li class = "nav-item active">
			<a class = "nav-link" href = "contact.php">Contact Us</a>
		</li>
	</ul>
	 <form class = "form-inline my-2 my-lg-0">
		<input class = "form-control mr-sm-2" type = "search" placeholder = "Search" aria-label = "Search">
		<!-- I need to use PHP to route the search button form to Google search -->
			<button class = "btn btn-outline-success my-2 my-sm-0" type = "submit">Search</button>&nbsp;&nbsp;
			<button class = "btn btn-outline-success my-2 my-sm-0" type = "submit">Log in</button>
		<!--	<a class = "btn btn-outline-success my-2 my-sm-0" href = "signup.php">Sign Up</a> -->
	</form> 
	</div>
	</nav>
	</header>
	<hr />
	<center>
	
	<form class = "form-group" name = "signup" action = "includes/signup.inc.php" method = "post">
	<h3 class = > Create your Goodies Account </h3>
	<input type = "text" name = "firstname" placeholder = "First Name" class = "border">
	
	&nbsp;
	<input type = "text" name = "lastname" placeholder = "Surname" class = "border"><br/><br/>
	<input type = "email" name = "mail" placeholder = "E-mail" class = "border">&nbsp;
	<input type = "text" name = "username" placeholder = "Username" class = "border" id = "user"><br/><br/>
	<input type = "text" name = "phone" placeholder = "Phone Number" class = "border">&nbsp;
	<input type = "password" name = "pwd" placeholder = "Password" class = "border"><br/><br/>

	<input type = "submit" name = "signup-submit" value = "Sign Up" class = "btn btn-success">
	<style>
	/*.form-group{
		height: 250px;
		margin-top: 10px;
		margin-left: 400px;
		margin-right:400px;
		border-radius: 20px;
		background-color:#a3a375; 
		margin-bottom: 200px; */
	}
	
	</style>
	</form>
	</center>


	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
	</html>
