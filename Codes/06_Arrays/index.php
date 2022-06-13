<?php
	define("TITLE", "Arrays");
	$my_name	= "Atul";
	$lesson_num	= 6;
	
	if (isset ($_GET['ref'])) {
		$ref = $_GET['ref'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			
			<div class="sandbox">	

				<p>Sometimes you'll want to store more than one value within your variables. With an array, you can do just that! Arrays allow you to store <em>multiple</em> values within a variable.</p>
				
				<p>For example, There are many cities! Using individual variables, I can store each city name in their own, like so:</p>
			
<pre class="brush: php">
$city1 = "Pune";

$city2 = "Kolhapur";

$city3 = "Nagpur";
</pre>
				
				<p>But, I'd like to keep things neat n' tidy and have all my city names in a single variable. So I'll use an array, like so:</p>
				
<pre class="brush: php">
$city = array("Pune", "Kolhapur", "Nagpur");
</pre>
				
								<p>Each value is automatically assigned a "key" in the array, so we can grab a specific value when we need it. We'll touch on keys later, but by default, each value has a numeric key assigned to it.</p>
			<p>So for example, "Pune" is 1, "Kolhapur" is 2, and "Nagpur" is 3. Here's the catch though &mdash; the numbers start at 0, not 1. So, "Handlebar" is actually 0, etc.</p>
			<p>If we want to grab a value out of an array and display it on our web page, we just reference the array and the key associated with the value we want to display, like so:</p>

<pre class="brush: php">
&lt;?php
echo $city[0]; // this will display "Pune"

echo $city[1]; // this will display "Kolhapur"

echo $city[2]; // this will display "Nagpur"
?&gt;
</pre>
				<p>Arrays are pretty powerful, and there's a lot more to them. So stay tuned!</p>
	
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				
				<!-- Did we come from the Foreach Loop lecture? -->
				<?php if ($ref) { ?>
				
				<a href="/<?php echo $ref; ?>" class="button prev">Back to Foreach Loop</a>
				
				<?php } else { ?>
				
				<a href="/05_GetYourHandsDirty" class="button prev">Previous Lecture</a>
				
				<?php } ?>
				
				<a href="/07_AssociativeArrays" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
