<?php 
spl_autoload_register(function ($class) {
    include_once "cls/".$class.".php";
});

$tsr = new Teacher();
$std = new Addmission();
$thset = new themesetup();



?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css" >	 
    <link rel="stylesheet" type="text/css" href="css/custome.css" >
	<link rel="stylesheet" type="text/css" href="css/responsive.css" >

<script type="text/javascript" src="js/jquary.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>	
<script type="text/javascript" src="js/bootstrapvalidator.min.js"></script>	
<script type="text/javascript" src="js/custome.js"></script>

<script type="text/javascript" src="js/print/jQuery.print.js"></script>


	<title>Sk Jobaer Siddiki</title>
<script type="application/javascript">


</script>
</head>
<body>
<div class="container template">
	<div class="row header">
		<div class="col-12">
			<a href="index.php"><img class="header-image" height="100" src="img/slideshow/01.jpg" width="100%" alt="Image Not Found"></a>
		</div>			
	</div>

    <div class="row">
		<div class="col-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light float-left">			  
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav mr-auto">
					<li class="nav-item">
					  <a class="nav-link" href="index.php">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_school.php">About School</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="teacher.php">Teacher</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="result.php">Result</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="contact.php">Contact</a>
					</li>
				  </ul>
				</div>
			  </nav>
		</div>
	</div>