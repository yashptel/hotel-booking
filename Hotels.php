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
<meta name="keywords" content="Wedding Folio Responsive web template,Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script src="js/easing.js"></script>
<!-- //grid-slider -->
</head>
<body>
<!-- Header Starts Here -->

<div class="navigation">
	<span class="menu"></span>
	<ul class="navig">
		<li><a href="index.php">Home</a></li>
		<li><a href="Hotels.php" class="active">Hotels</a></li>
		<li><a href="Bookings.php">Bookings</a></li>
		<li><a href="About.php">About Us</a></li>
		<li><a href="contact.php">Feedback</a></li>
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
<div class="container">
			<div class="about-col">
				<h3>Hotels</h3>
				<?php
	            include_once 'AdminPanel/classes/Hotel.php';
	            $objHotel = new Hotel();
	            $resultHotel = $objHotel->getAll();
	            foreach ($resultHotel as $rowHotel) {
	          	?>
	          	<div class="col-md-4">
	          	<a href="Booking.php?HotelID=<?php echo($rowHotel['HotelID']); ?>">
				<img src="images/hotel.png" alt=""></a>
				<h3 align="center" style="color: #1B1E6D"><?= $rowHotel['HotelName'] ?></h3>
				<h4 align="center" style="color: black">City : <?= $rowHotel['City'] ?></h4>
				<h4 align="center" style="color: black">Mobile Number : <?= $rowHotel['HotelMobileNumber'] ?></h4>
				<h4 align="center" style="color: red">Price : <?= $rowHotel['HotelPrice'] ?></h4>
				</div>
				<?php
				}
				?>
			</div>
			
		</div>
<!-- Page Ends Here -->
<?php
	include_once 'footer.php';
?>
</body>
</html>