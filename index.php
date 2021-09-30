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
		<li><a href="index.php" class="active">Home</a></li>
		<li><a href="Hotels.php">Hotels</a></li>
		<li><a href="Bookings.php">Bookings</a></li>
		<li><a href="About.php">About us</a></li>
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
<!-- Content Part Starts Here -->
<div class="content">
	<div class="container">
		<div class="col-md-6 content-col">
			<img src="images/welcome.jpg" alt="">
		</div>
		<div class="col-md-6 content-col col_2">
			<h2>Welcome...</h2>
			<p align="justify">There Are Many Hotels Are Available.</p>
			<p align="justify">A hotel is an establishment that provides paid lodging on a short-term basis. Hotel rooms are usually numbered to allow guests to identify their room. Some boutique, high-end hotels have custom decorated rooms. Some hotels offer meals as part of a room and board arrangement.</p>
		</div>
			<div class="ideas">
			<h2 style="color: #C70039">HOTELS AND HOTEL INDUSTRY</h2>
			<p align="justify" style="font-size: 20px">The primary purpose of hotels is to provide travelers with shelter, food, refreshment, and similar services and goods, offering on a commercial basis things that are customarily furnished within households but unavailable to people on a journey away from home. Historically hotels have also taken on many other functions, serving as business exchanges, centers of sociability, places of public assembly and deliberation, decorative showcases, political headquarters, vacation spots, and permanent residences. The hotel as an institution, and hotels as an industry, transformed travel in America, hastened the settlement of the continent, and extended the influence of urban culture.</p>
		</div>
		
			<div class="ideas">
			<h2 style="color: #C70039">NINETEENTH-CENTURY HOTELS</h2>
			<p align="justify" style="font-size: 20px">A second period of hotel construction began around 1820, driven by the American transportation revolution. Steam navigation and the coming of the canal age, especially the opening of the Erie Canal in 1825, extended the range of movement along the nation's internal waterways and greatly increased the volume of travel in America. Urban merchant-capitalists constructed a new generation of hotels as part of their mercantilist strategy to claim expanding economic hinterlands for their cities and states. The first of these hotels appeared in leading commercial centers along coastal trade routes, beginning with Baltimore's City Hotel (1826), Washington's National Hotel (1827), Philadelphia's United States Hotel (1828), and Boston's renowned Tremont House (1829). These were followed by similar establishments built at key points along the Ohio and Mississippi rivers, notably Cincinnati's Pearl Street House (1831), Louisville's Galt House (1834), and the St. Charles in New Orleans (1837). These and other second-generation American hotels were much larger and more numerous than their predecessors and established the rectilinear, city-block hotel as a set architectural form that would be repeated in locations all across the growing nation. This phase of hotel development was brought to a close by the prolonged depression that followed the panic of 1837.</p>
		</div>

			<div class="ideas">
			<h2 style="color: #C70039">HOTELS IN THE AGE OF AUTO AND AIR TRAVEL</h2>
			<p align="justify" style="font-size: 20px">The rise of the automobile in the early twentieth century reordered the nation's transportation regime and marked the beginning of a new hotel age that lasted for more than two decades. The nineteenth-century American hotel system had been predicated upon long-distance, point-to-point, steam-driven water and rail transportation, and the gradual transition to automobility wrought major changes in the hotel industry. In an effort to secure the patronage of drivers, existing hotels added parking facilities, and new establishments incorporated them into their building plans. Other developers created the motor hotel, or motel, a new hotel variant which, instead of being located in cities and other travel destinations, was typically sited on inexpensive land along the roads in between. The automobile also influenced the hotel industry in construction and management techniques, as Fordist mass production fostered a corresponding drive for standardization and scale in hotels. E. M. Statler was the foremost figure in this cause. In 1908, he opened the first chain of hotels dedicated to his belief that hospitality should be made as similar as possible in every location. Statler's success with a business model based on cost cutting and scientific management made him the leading hotelier of his time and an important influence upon twentieth-century hotel administration. By 1930, as the Great Depression was putting a definitive end to this period of hotel building, the Census Bureau counted more than 17,000 hotels in the United States.</p>
		</div>

		<div class="ideas">
			<div align="center" class="col-xs-12 col-sm-12 col-md-6">
                <center>
                	<a href="#header"><img class="logo  p-log" src="images/logo2.png" alt="Hotel Booking"></a>
                </center>
            </div>
			<h3 align="right" style="color: #C70039" >Follow Us</h3>
			<ul class="social" align="right">
				<li><a href="#" target="_blank"><i class="fa"></i></a></li>
				<li><a href="#" target="_blank"><i class="fb"></i></a></li>
				<li><a href="#" target="_blank"><i class="fc"></i></a></li>
			</ul>
		</div>
		</div>
	</div>
</div>
<?php
	include_once 'footer.php';
?>
</body>
</html>