<?php
	
	// Constants
	define("TITLE", "Associative Arrays");
	
	// Custom Variables
	$my_name	= "Atul";
	$lesson_num	= 7;
	
	// City Associative Array
	$handlebar = array(
					"name" => "Pune",
					"river" => "Pawana",
					"area_pin" => 411001
				);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <? echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">
				<h2>The <?php echo $city["name"]; ?> Pune!</h2>
				<p>This city is great! It has river <strong><?php echo $city["river"]; ?></strong> and <strong><?php echo $city["area_pin"]; ?> area pin</strong> for address.</strong></p>
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
