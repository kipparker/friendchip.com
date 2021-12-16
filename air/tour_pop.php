<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Intairnet: On Tour With Air</title>
<style type="text/css">
h2,h1{
	background : #ffffff;
	font-size: 11px;
	padding : 4px 0px 4px 0px;
	font-weight:normal;
	text-transform:uppercase;
	font-family:Arial, Helvetica, sans;
	width:400px;
	margin-top:10px;
	margin-bottom:10px;
}
</style>
</head>
<body bgcolor="black">
<?
$photos = array(
"florence" =>"Florence, Italy July 9 2004",
"naples" => "Naples, Italy July 8 2004",
"rome" => "Rome, Italy July 7 2004",
"italy" => "Ferrara, Italy 6 July 2004",
"belgium" => "Werchter Festival, Belgium 4 July 2004",
"july 2 2004 - Aix les bains photo by Nicolas Godin" => "Musilac Festival, Aix les Bains, France July 2, 2004",
"vienna" => "Schoenbrunn Castle case, Vienna, Austria 30 June 2004",
"montreux" => "Claude Nobs-Lori Immi, Montreux Jazz Festival, 3 July 2004 ",
"czech" => "Roxy, Prague, Czech Republic 29 June 2004",
"dresden" => "Dresden, Germany 28 June 2004 ",
"neuhausen" => "Southside Festival, Neuhausen, Germany 27 June 2004",
"scheesel" => "Hurricane Festival, Scheesel, Germany 25 June 2004 ",
"tollwood" => "Tollwood Festival, Munich, Germany June 23, 2004",
"holland" => "Dave Palmer, Utrecht, Holland June 22, 2004",
"finland" => "Provinssirock Festival, Finland June 19, 2004",
"sweden" => "Hultsfred Festival, Sweden June 17, 2004",
"coachella" =>   "Coachella(Indio), California May 2, 2004",
"phoenix" =>   "Phoenix(Tempe), Arizona May 1, 2004",
"seattle" =>   "Seattle, Washington April 30, 2004",
"denver" =>   "Denver(Englewood), Colorado April 24, 2004",
"Kansascity" =>   "Kansas City, Missouri April 23, 2004",
"minneapolis" =>   "Minneapolis, Minnesota April 21, 2004",
"chicago_nico_web" =>   "Chicago, April 20th, Nicolas Godin",
"pontiacycle" =>   "Pontiac, Michigan April 18, 2004",
"toronto1_web" =>   "Toronto, April 17th, coat check",  
"hammerstein1_web" =>   "New York City, April 13th, venue after the show",
"avalon_door_web" =>   "Boston, April 12th, stage door",
"earl_pianogood_web" =>  "Philadelphia, April 10th, Earl Harvin",
"dc_stage1_web" =>   "Washington DC, April 8th, Jean-Benoit Dunckel",
"nico_palm_atl_web" =>  "Atlanta, April 6th, Nicolas Godin & Dave Palmer",
"n.o.jb_web" =>  "New Orleans, April 5th, Jean-Benoit Dunckel",
"bordeaux" =>   "Bordeaux, March 9, 2004",
"barcelona" =>   "Barcelona Spain March 8, 2004",
"marseille" =>   "Marseille France March 7, 2004",
"milan" =>   "Milan Italy March 3, 2004",
"munich" =>   "Munich Germany March 2, 2004",
"manchester" =>   "Manchester UK Feb 13,2004",
"Nottingham" =>   "Nottingham UK Feb 11, 2004",
"bruxelles" =>   "Bruxelles Belgium Feb 7, 2004"

);
?>
<h1>&nbsp;> On Tour with Air</h1>
<h1>&nbsp;> PHOTOGRAPHS BY JENNA FELLING </h1>
<?

while(list($file,$details)=each($photos)){
	$img = sprintf("tour/%s.jpg", $file);
	$sizes = getimagesize($img);

	printf('<img src="%s" %s alt="" border="0">', $img, $sizes[3]);
		printf('<h2>&nbsp;> %s</h2>', $details);
}
?>
</body>
</html>
