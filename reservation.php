<!DOCTYPE HTML>
<html>
<head>
<title>Classique Zoo System | Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<?php 
    $title = 'Index';
    //require_once 'includes/header.php'; 
    require_once 'db/conn.php';
     include_once('includes/header.php');
     ?>
			
		<div class="banner-header">
			<div class="container">
				<h2>Reservation</h2>
			</div>
			</div>
<?php
    $result = $crud->getSpecialties();
    
    ?>
   
      <h1 class="text-center">Reservation for Classique Zoo </h1>
    
    <form method="post" action="success.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
        <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            </div>
            </div>
    <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" 
            aria-describedby="emailhelp"> 
            <small id="emailhelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" 
            aria-describedby="phonehelp">
            <small id="phonehelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>