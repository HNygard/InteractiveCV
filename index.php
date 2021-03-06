<?php

/* INTERACTIVE CV

Mainly written on a train from Stavanger to Kristiansand without interwebz

Made by Hallvard Nygard <hallvard.nygard@gmail.com>
Github: https://github.com/HNygard/InteractiveCV/

License: Creative Commons Attribution-Share Alike 3.0 Norway License, http://creativecommons.org/licenses/by-sa/3.0/no/

*/

/* TEXT STRINGS */
// Can be translated...
$lang = array();
$lang['h1_screen']     = 'Interaktiv CV - Hallvard Nyg&aring;rd';
$lang['h1_print']      = 'CV - Hallvard Nyg&aring;rd';
$lang['is_printable']  = 'I denne interaktive CVen kan du vise mer eller mindre '.
	'informasjon '.
	'om ulike jobber og prosjekter. Hvis du s&aring; skriver den ut, s&aring; vil du '.
	'f&aring; ut akkurat den valgte informasjonen.';
$lang['read_more']     = 'Vis mer om denne';
$lang['read_less']     = 'Vis mindre om denne';
$lang['olderjobs_read_more']     = 'Vis flere jobber og erfaringer (ikke så spennende)';
$lang['olderjobs_read_less']     = 'Vis mindre jobber og erfaringer';
$lang['contact_info_read_more']  = 'Vis mer';
$lang['contact_info_read_less']  = 'Vis mindre';
$lang['contact_info']  = 'Kontaktinformasjon';
$lang['jobs']          = 'Jobb- og organisasjonserfaring';
$lang['edu']           = 'Skolegang';
$lang['other1']        = 'Dataprosjekt / -oppdrag';
$lang['other2']        = 'Kurs';
$lang['other3']        = 'Datakvalifikasjoner';
$lang['languages']     = 'Spr&aring;k';

$lang['footer']        = 'Denne CVen er skrevet ut fra http://cv.hnygard.no/.<br />Kildekode til Interactive CV: https://github.com/HNygard/InteractiveCV/';

function htmllink ($url, $text)
{
	return
		'<span class="screenonly">'.
			'<a href="'.$url.'">'.$text.'</a>'.
		'</span>'.
		'<span class="printonly">'.
			$text.': '.
			'<span class="oneline">'.$url.'</span>'.
		'</span>';
}

function htmltoggle ($text)
{
	global $lang;
	
	return
		'<div class="toggle">'.
			'<span class="toggle screenonly">'.
			'<span class="toggle_readmore">'.
				$lang['read_more'].'</span>'.
			'<span class="toggle_readless">'.
				$lang['read_less'].'</span>'.
			'<br /></span>'.
			'<span class="toggle_text">'.$text.'</span>'.
		'</div>';
}

function htmlimage ($img, $txt)
{
	return '<a href="'.$img.'" class="lightbox" title="'.$txt.'"><img src="'.$img.'" alt="'.$txt.'" width="250"></a><br />'.$txt;
}


require 'cv_data.php';

?><html>
<head>
	<title>Hallvard Nyg&aring;rd sin interaktive CV</title>
	<link rel="stylesheet" type="text/css" href="css/interaktivcv.css" />
	<link rel="stylesheet" type="text/css" href="css/interaktivcv_print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="css/interaktivcv_screen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/interaktivcv.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
	<?php if(isset($script)) echo $script; ?>
</head>

<body>

<h1 class="screenonly"><?php echo $lang['h1_screen']; ?></h1>
<h1 class="printonly">CV - Hallvard Nyg&aring;rd</h1>
<div class="notice screenonly" style="width: 500px; font-size: 0.9em;">
	<?php echo $lang['is_printable']; ?></div>

<?php

function print_jobs($jobs)
{
	global $lang;
echo '<ul>'.chr(10).chr(10);
foreach($jobs as $job)
{
	echo '<li class="job">'.chr(10).
		"\t".'<div class="jobtitleandstuff">'.chr(10).
		"\t\t".'<div class="fromto">'.$job['fromto'].'</div>'.chr(10).
		"\t\t".'<div class="titleandstuff">'.chr(10).
		"\t\t\t".'<div class="title">'.$job['title'].'</div>'.chr(10).
		"\t\t\t".'<div class="description_short">'.
			$job['description_short'].'</div>'.chr(10);
		if($job['description_long'] != '')
			echo "\t\t\t".'<div class="job_readmore screenonly">'.
				'<span class="job_readmore">'.$lang['read_more'].'</span>'.
				'<span class="job_readless">'.$lang['read_less'].'</span>'.
			'</div>'.chr(10);
		echo 
		"\t\t</div>\n".
		"\t</div>\n";
		if($job['description_long'] != '')
			echo 
		"\t".'<ul>'.chr(10).
		"\t\t".'<li class="description_long">'.
				$job['description_long'].'</li>'.chr(10).
		"\t</ul>\n";
		
		echo '</li>'.chr(10).chr(10);
}

echo '</ul>'.chr(10).chr(10);

}

function print_contact_info($array)
{
	echo '<ul>'.chr(10);
	foreach($array as $info)
	{
		echo "\t<li>\n";
		if($info[0] != '' || $info[1] != '')
		{
			echo "\t\t".'<span class="contact_info_heading">'.
				$info[0].':</span> ';
			echo "\t\t".'<span class="contact_info_content">'.
				$info[1].'</span>';
		}
		else
			echo '&nbsp;';
		echo "\t</li>\n";
	}
	echo '</ul>'.chr(10).chr(10);
}

echo '<h2>'.$lang['contact_info'].'</h2>'.chr(10);
echo '<div class="contact_info_columns">'.chr(10);
	echo '<div class="contact_info_col1">'.chr(10);
		print_contact_info($contact_col1);
	echo '</div>'.chr(10);
	echo '<div class="contact_info_col2">'.chr(10);
		print_contact_info($contact_col2);
	echo '</div>'.chr(10);
echo '</div>'.chr(10).chr(10);

echo '<div class="contact_readmore screenonly">'.
	'<span class="contact_readmore">'.$lang['contact_info_read_more'].'</span>'.
	'<span class="contact_readless">'.$lang['contact_info_read_less'].'</span>'.
'</div>'.chr(10);
echo '<div class="contact_info_viewmore">'.chr(10);
print_contact_info($contact_viewmore);
echo '</div>'.chr(10).chr(10);


echo '<h2>'.$lang['jobs'].'</h2>'.chr(10);
print_jobs($jobs);

/*
echo '<div class="toggle">'.
	'<span class="toggle screenonly">'.
	'<span class="toggle_readmore">'.
		$lang['olderjobs_read_more'].'</span>'.
	'<span class="toggle_readless">'.
		$lang['olderjobs_read_less'].'</span>'.
	'<br /></span>'.
	'<span class="toggle_text">';

print_jobs($jobs_hidden);
echo 	'</span>'.
'</div>';
*/

echo '<h2>'.$lang['edu'].'</h2>'.chr(10);
print_jobs($edu);

echo '<h2>'.$lang['other1'].'</h2>'.chr(10);
print_jobs($other1);

//echo '<h2>'.$lang['other2'].'</h2>'.chr(10);
//print_jobs($other2);

echo '<h2>'.$lang['other3'].'</h2>'.chr(10);
print_jobs($other3);

echo '<h2>'.$lang['languages'].'</h2>'.chr(10);
print_jobs($languages);

echo chr(10).chr(10).'<br /><br /><span class="footer">'.$lang['footer'].'</span>'.chr(10);

?>

<!-- https://github.com/HNygard/InteractiveCV/ -->
</body>
</html>
