<html>
<head>
	<title>Hallvard Nyg&aring;rd sin interaktive CV</title>
	<link rel="stylesheet" type="text/css" href="css/interaktivcv.css" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/interaktivcv.js"></script>
</head>

<body>

<h1>Interaktiv CV - Hallvard Nyg&aring;rd</h1>

<?php

require 'cv_data.php';

foreach($jobs as $job)
{
	echo '<div class="job">'.chr(10).
		'	<div class="fromto">'.$job['fromto'].'</div>'.chr(10).
		'	<div class="title">'.$job['title'].'</div>'.chr(10).
		'	<div class="description_short">'.
				$job['description_short'].'</div>'.chr(10).
		'	<div class="description_long">'.
				$job['description_long'].'</div>'.chr(10).
	'</div>'.chr(10).chr(10);
}
?>

</body>
</html>
