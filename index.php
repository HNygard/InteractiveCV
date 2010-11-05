<html>
<head>
	<title>Hallvard Nyg&aring;rd sin interaktive CV</title>
	<link rel="stylesheet" type="text/css" href="css/interaktivcv.css" />
	<link rel="stylesheet" type="text/css" href="css/interaktivcv_print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="css/interaktivcv_screen.css" media="screen" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/interaktivcv.js"></script>
</head>

<body>

<h1 class="screenonly">Interaktiv CV - Hallvard Nyg&aring;rd</h1>
<h1 class="printonly">CV - Hallvard Nyg&aring;rd</h1>

<?php

require 'cv_data.php';

echo '<ul>'.chr(10).chr(10);
foreach($jobs as $job)
{
	echo '<li class="job">'.chr(10).
		"\t".'<div class="jobtitleandstuff">'.chr(10).
		"\t\t".'<div class="fromto">'.$job['fromto'].'</div>'.chr(10).
		"\t\t".'<div class="titleandstuff">'.chr(10).
		"\t\t\t".'<div class="title">'.$job['title'].'</div>'.chr(10).
		"\t\t\t".'<div class="description_short">'.
				$job['description_short'].'</div>'.chr(10).
		"\t\t</div>\n".
		"\t</div>\n".
		"\t".'<ul>'.chr(10).
		"\t\t".'<li class="description_long">'.
				$job['description_long'].'</li>'.chr(10).
		"\t</ul>\n".
		'</li>'.chr(10).chr(10);
}

echo '</ul>'.chr(10).chr(10);

?>

</body>
</html>
