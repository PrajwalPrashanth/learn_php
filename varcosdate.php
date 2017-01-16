<?php 
	define ("TITLE","Variables and Constants");
	$my_name = "Prajwal Prashanth";
	$fav_colr = "Red";
	$birth_year = 1997;
	date_default_timezone_set('Asia/Kolkata');
	$today = date ('d-m-Y');
	$present_year =date ('Y');
	$age = ($present_year - $birth_year);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title><?php echo TITLE; ?></title>
	</head>
	<body>
		<div class="1class">
		<h1><?php echo TITLE; ?></h1> <br />
		<p>
			<h3>Today's Date</h3> <br />
			<?php echo $today; ?>
		</p>
		<p>
			<h3>My Name</h3> <br />
			<?php echo $my_name; ?>
		</p>
		<p>
			<h3>My Favourite Colour</h3> <br />
			<?php echo $fav_colr; ?>
		</p>
		<p>
			<h3>My Age</h3> <br />
			<?php echo $age; ?>
		</p>
		<p>
			&copy; <?php echo $present_year; echo $my_name; ?>
		</p>
		</div>
	</body>
</html>
