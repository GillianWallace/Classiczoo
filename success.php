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
				<h2>Congratulation</h2>
			</div>
			</div>
<?php
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once "sendemail.php";

    if (isset($_POST['submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['Gender'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
           
        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to Classique Zoo', 'Dear ' . $fname . ' '.$lname.',<br><br>This letter is the confirmation of your reservation for the Annual Conference held by the International Computer Association.<br/>This year the conference would be from December 6, 2020, to December 8, 2020.<br/><br/>You have a reserved seat in all the four workshops for the treatment of substance abuse.<br><br/>For any further queries, feel free to write to us or give us a call.<br/><br>Regards. <br/><br>IT Conference Team<br>');

            include 'includes/sucessmessage.php';
        }
        else{
            include 'includes/errormessage.php';  
        }
    }
?>

    <!--This prints out values that were passed to the action page using method ="get"--> 
   <!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php //echo $_GET['firstname'] .' ' . $_GET['lastname']; ?>
        </h5>
        
        <p class="card-text">
            Email Address: <?php //echo $_GET['email'];  ?>
        </p>
        <p class="card-text">
            Contact Number: <?php //echo $_GET['phone'];  ?>
        </p>

        </div>
</div> -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
    <div> <img class="rounded-circle" src="<?php echo $destination ?>" width="120&quot;" height="120&quot;"/></div>
        <h5 class="card-title">
            <?php echo $_POST['firstname'] .' ' . $_POST['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
                <p class="card-text">
            Email Address: <?php echo $_POST['email'];  ?>
        </p>
        <p class="card-text">
            Contact Number: <?php echo $_POST['phone'];  ?>
        </p>

        </div>
    
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>