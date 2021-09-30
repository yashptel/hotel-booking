<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking System</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Wedding Folio Responsive web template, Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script src="js/easing.js"></script>
<!-- //grid-slider -->
</head>
<body>
<!-- Header Starts Here -->
<div class="header page-hed">
	<div class="container">
	<div class="logo p-log">
		<a href="index.php"><img src="images/logo1.png" alt=""></a>
	</div>
	</div>
</div>
<div class="navigation">
	<span class="menu"></span>
	<ul class="navig">
		<li><a href="index.php">Home</a></li>
		<li><a href="Hotels.php">Hotels</a></li>
		<li><a href="Bookings.php">Bookings</a></li>
		<li><a href="About.php">About Us</a></li>
		<li><a href="contact.php" class="active">Feedback</a></li>
	</ul>
	<script>
		$( "span.menu" ).click(function() {
		  $( "ul.navig" ).slideToggle( "slow", function() {
		    // Animation complete.
		  });
		});
	</script>
</div>
<!-- Header Ends Here -->
<!-- Page Starts Here -->
<div class="content">
	<div class="container">
		<div class="gallery">
			<h3>Feedback</h3>
				<div class="contact-box">
				<form action="con_AddFeedback.php" method="POST">
				<div class="text">
					<input name="VisitorMobileNumber" type="text" placeholder="Enter Your Mobile Number" required="">
				</div>
				<div class="text">
					<textarea name="Feedback" placeholder="Enter Your Feedback..." required=""></textarea>
				</div>
				<div class="text" align="center">
					<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Page Ends Here -->
<?php
	include_once 'footer.php';
?>
</body>
</html>